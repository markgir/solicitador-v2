<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/../includes/functions.php';

$selectedPage = isset($_GET['page']) ? $_GET['page'] : null;
$pages = get_all_pages();
$pageTitle = 'Editar Conteúdos';

$contentItems = [];
if ($selectedPage) {
    $contentItems = get_page_content($selectedPage);
}

// Handle POST save
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $selectedPage) {
    $db = getDB();
    $stmt = $db->prepare('UPDATE content SET content_value = :val WHERE id = :id AND page = :page');
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'content_') === 0) {
            $id = (int) substr($key, 8);
            $stmt->bindValue(':val', trim($value), SQLITE3_TEXT);
            $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
            $stmt->bindValue(':page', $selectedPage, SQLITE3_TEXT);
            $stmt->execute();
            $stmt->reset();
        }
    }
    // Refresh content after save
    $contentItems = get_page_content($selectedPage);
    $saved = true;
}

include __DIR__ . '/includes/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Editar Conteúdos</h2>
</div>

<!-- Page selector -->
<div class="row mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold">Selecionar Página</label>
        <select class="form-select" onchange="window.location='content.php?page='+this.value">
            <option value="">— Escolha uma página —</option>
            <?php foreach ($pages as $p): ?>
            <option value="<?= htmlspecialchars($p, ENT_QUOTES, 'UTF-8') ?>" <?= $selectedPage === $p ? 'selected' : '' ?>>
                <?= htmlspecialchars(page_label($p), ENT_QUOTES, 'UTF-8') ?> (<?= htmlspecialchars($p, ENT_QUOTES, 'UTF-8') ?>)
            </option>
            <?php endforeach; ?>
        </select>
    </div>
</div>

<?php if (isset($saved)): ?>
<div class="alert alert-success alert-dismissible fade show">
    <i class="bi bi-check-circle"></i> Conteúdos guardados com sucesso!
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php endif; ?>

<?php if ($selectedPage && !empty($contentItems)): ?>
<form method="post" action="content.php?page=<?= urlencode($selectedPage) ?>">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <strong><?= htmlspecialchars(page_label($selectedPage), ENT_QUOTES, 'UTF-8') ?></strong> — Conteúdos
            <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-save"></i> Guardar Tudo</button>
        </div>
        <div class="card-body">
            <?php foreach ($contentItems as $item): ?>
            <div class="mb-3">
                <label class="form-label fw-bold">
                    <?= htmlspecialchars($item['label'] ?: $item['content_key'], ENT_QUOTES, 'UTF-8') ?>
                    <small class="text-muted fw-normal">(<?= htmlspecialchars($item['content_key'], ENT_QUOTES, 'UTF-8') ?>)</small>
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
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Guardar Alterações</button>
        </div>
    </div>
</form>
<?php elseif ($selectedPage): ?>
<div class="alert alert-info">Nenhum conteúdo editável encontrado para esta página.</div>
<?php endif; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
