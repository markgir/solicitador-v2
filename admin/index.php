<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/../includes/functions.php';

$pageTitle = 'Dashboard';
$pages = get_all_pages();
$db = getDB();

// Count stats
$totalSections = $db->query('SELECT COUNT(*) FROM sections')->fetchColumn();
$hiddenSections = $db->query('SELECT COUNT(*) FROM sections WHERE visible = 0')->fetchColumn();
$totalContent = $db->query('SELECT COUNT(*) FROM content')->fetchColumn();
$editedContent = $db->query("SELECT COUNT(*) FROM content WHERE content_value IS NOT NULL AND content_value != ''")->fetchColumn();

include __DIR__ . '/includes/header.php';
?>

<!-- Stats row -->
<div class="row g-3 mb-4">
    <div class="col-6 col-lg-3">
        <div class="stat-card">
            <div class="stat-icon pages"><i class="bi bi-file-earmark-text"></i></div>
            <div>
                <div class="stat-value"><?= count($pages) ?></div>
                <div class="stat-label">Páginas</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="stat-card">
            <div class="stat-icon sections"><i class="bi bi-layout-text-sidebar"></i></div>
            <div>
                <div class="stat-value"><?= $totalSections ?></div>
                <div class="stat-label">Secções</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="stat-card">
            <div class="stat-icon hidden"><i class="bi bi-eye-slash"></i></div>
            <div>
                <div class="stat-value"><?= $hiddenSections ?></div>
                <div class="stat-label">Secções Ocultas</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="stat-card">
            <div class="stat-icon content"><i class="bi bi-check2-circle"></i></div>
            <div>
                <div class="stat-value"><?= $editedContent ?><span style="font-size:.85rem;font-weight:400;color:var(--text-muted)"> / <?= $totalContent ?></span></div>
                <div class="stat-label">Conteúdos Editados</div>
            </div>
        </div>
    </div>
</div>

<!-- Pages grid -->
<h3 class="section-heading-sm">Páginas</h3>
<div class="row g-3">
    <?php foreach ($pages as $page): ?>
    <div class="col-6 col-md-4 col-xl-3">
        <div class="page-card">
            <div class="page-card-title"><?= htmlspecialchars(page_label($page), ENT_QUOTES, 'UTF-8') ?></div>
            <div class="page-card-file"><?= htmlspecialchars($page, ENT_QUOTES, 'UTF-8') ?>.php</div>
            <div class="page-card-actions">
                <a href="sections.php?page=<?= urlencode($page) ?>" class="btn-page sections">
                    <i class="bi bi-layout-text-sidebar"></i> Secções
                </a>
                <a href="content.php?page=<?= urlencode($page) ?>" class="btn-page content">
                    <i class="bi bi-pencil-square"></i> Conteúdos
                </a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
