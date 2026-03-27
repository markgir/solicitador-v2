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

<!-- Page selector -->
<div class="page-selector">
    <label class="form-label">Página</label>
    <select class="form-select" onchange="window.location='content.php?page='+this.value">
        <option value="">— Escolha uma página —</option>
        <?php foreach ($pages as $p): ?>
        <option value="<?= htmlspecialchars($p, ENT_QUOTES, 'UTF-8') ?>" <?= $selectedPage === $p ? 'selected' : '' ?>>
            <?= htmlspecialchars(page_label($p), ENT_QUOTES, 'UTF-8') ?>
        </option>
        <?php endforeach; ?>
    </select>
</div>

<?php if (isset($saved)): ?>
<div class="alert-modern success mb-3">
    <i class="bi bi-check-circle-fill"></i> Conteúdos guardados com sucesso!
</div>
<?php endif; ?>

<?php if ($selectedPage && !empty($contentItems)): ?>
<form method="post" action="content.php?page=<?= urlencode($selectedPage) ?>">
    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>">
    <div class="panel">
        <div class="panel-header">
            <span><?= htmlspecialchars(page_label($selectedPage), ENT_QUOTES, 'UTF-8') ?></span>
            <button type="submit" class="btn-accent"><i class="bi bi-check-lg"></i> Guardar</button>
        </div>
        <div class="panel-body">
            <?php foreach ($contentItems as $item): ?>
            <div class="field-group">
                <label class="form-label">
                    <?= htmlspecialchars($item['label'] ?: $item['content_key'], ENT_QUOTES, 'UTF-8') ?>
                </label>
                <div class="field-key"><?= htmlspecialchars($item['content_key'], ENT_QUOTES, 'UTF-8') ?></div>
                <?php if ($item['content_type'] === 'textarea' || $item['content_type'] === 'html'): ?>
                <textarea name="content_<?= (int)$item['id'] ?>" class="form-control mt-1" rows="3"
                          placeholder="Deixe vazio para usar o valor padrão"><?= htmlspecialchars($item['content_value'] ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>
                <?php else: ?>
                <input type="text" name="content_<?= (int)$item['id'] ?>" class="form-control mt-1"
                       value="<?= htmlspecialchars($item['content_value'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                       placeholder="Deixe vazio para usar o valor padrão">
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="panel-footer">
            <button type="submit" class="btn-accent"><i class="bi bi-check-lg"></i> Guardar Alterações</button>
        </div>
    </div>
</form>
<?php elseif ($selectedPage): ?>
<div class="empty-state">
    <i class="bi bi-inbox"></i>
    <p>Nenhum conteúdo editável encontrado para esta página.</p>
</div>
<?php endif; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
