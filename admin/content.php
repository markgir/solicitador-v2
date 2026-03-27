<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/../includes/functions.php';

$selectedPage = isset($_GET['page']) ? $_GET['page'] : null;
$pages = get_all_pages();
$pageTitle = 'Editar Conteúdos';

// Validate selectedPage against allowed pages
if ($selectedPage !== null && !in_array($selectedPage, $pages, true)) {
    $selectedPage = null;
}

$contentItems = [];
if ($selectedPage) {
    $contentItems = get_page_content($selectedPage);
}

// Handle POST save
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $selectedPage) {
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        http_response_code(403);
        die('Invalid CSRF token.');
    }
    $db = getDB();
    $stmt = $db->prepare('UPDATE content SET content_value = :val WHERE id = :id AND page = :page');
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'content_') === 0) {
            $id = (int) substr($key, 8);
            if ($id <= 0) continue;
            $stmt->bindValue(':val', trim($value), PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->bindValue(':page', $selectedPage, PDO::PARAM_STR);
            $stmt->execute();
        }
    }
    // Refresh content after save
    $contentItems = get_page_content($selectedPage);
    $saved = true;
}

include __DIR__ . '/includes/header.php';
?>

<div class="page-header">
    <nav class="breadcrumb-admin" aria-label="breadcrumb">
        <ol class="breadcrumb mb-1">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Conteúdos</li>
        </ol>
    </nav>
    <h2>Editar Conteúdos</h2>
    <p class="text-muted mb-0">Altere textos e informações de cada página</p>
</div>

<!-- Page selector -->
<div class="row mb-4">
    <div class="col-md-5">
        <label class="form-label">Selecionar Página</label>
        <select class="form-select" onchange="window.location='content.php?page='+this.value">
            <option value="">— Escolha uma página —</option>
            <?php foreach ($pages as $p): ?>
            <option value="<?= htmlspecialchars($p, ENT_QUOTES, 'UTF-8') ?>" <?= $selectedPage === $p ? 'selected' : '' ?>>
                <?= htmlspecialchars(page_label($p), ENT_QUOTES, 'UTF-8') ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
</div>

<?php if (isset($saved)): ?>
<div class="alert alert-success alert-dismissible fade show">
    <i class="bi bi-check-circle me-1"></i> Conteúdos guardados com sucesso!
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php endif; ?>

<?php if ($selectedPage && !empty($contentItems)): ?>
<form method="post" action="content.php?page=<?= urlencode($selectedPage) ?>">
    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span><i class="bi bi-pencil-square me-1"></i> <?= htmlspecialchars(page_label($selectedPage), ENT_QUOTES, 'UTF-8') ?></span>
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="bi bi-check-lg me-1"></i>Guardar
            </button>
        </div>
        <div class="card-body">
            <?php foreach ($contentItems as $item): ?>
            <div class="mb-3">
                <label class="form-label">
                    <?= htmlspecialchars($item['label'] ?: $item['content_key'], ENT_QUOTES, 'UTF-8') ?>
                    <small class="text-muted fw-normal ms-1">(<?= htmlspecialchars($item['content_key'], ENT_QUOTES, 'UTF-8') ?>)</small>
                </label>
                <?php if ($item['content_type'] === 'textarea' || $item['content_type'] === 'html'): ?>
                <textarea name="content_<?= (int)$item['id'] ?>" class="form-control" rows="3"
                          placeholder="Deixe vazio para usar o valor padrão"><?= htmlspecialchars($item['content_value'] ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>
                <?php else: ?>
                <input type="text" name="content_<?= (int)$item['id'] ?>" class="form-control"
                       value="<?= htmlspecialchars($item['content_value'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                       placeholder="Deixe vazio para usar o valor padrão">
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="card-footer text-end" style="background:#f8fafc;">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-check-lg me-1"></i>Guardar Alterações
            </button>
        </div>
    </div>
</form>
<?php elseif ($selectedPage): ?>
<div class="alert alert-info">
    <i class="bi bi-info-circle me-1"></i> Nenhum conteúdo editável encontrado para esta página.
</div>
<?php endif; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
