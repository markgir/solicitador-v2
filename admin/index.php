<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/../includes/functions.php';

$pageTitle = 'Dashboard';
$pages = get_all_pages();
$db = getDB();

// Count stats
$totalSections = $db->querySingle('SELECT COUNT(*) FROM sections');
$hiddenSections = $db->querySingle('SELECT COUNT(*) FROM sections WHERE visible = 0');
$totalContent = $db->querySingle('SELECT COUNT(*) FROM content');
$editedContent = $db->querySingle("SELECT COUNT(*) FROM content WHERE content_value IS NOT NULL AND content_value != ''");

include __DIR__ . '/includes/header.php';
?>

<h2 class="mb-4">Dashboard</h2>

<div class="row mb-4">
    <div class="col-md-3">
        <div class="card text-bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title"><?= count($pages) ?></h5>
                <p class="card-text mb-0">Páginas</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title"><?= $totalSections ?></h5>
                <p class="card-text mb-0">Secções</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-bg-warning mb-3">
            <div class="card-body">
                <h5 class="card-title"><?= $hiddenSections ?></h5>
                <p class="card-text mb-0">Secções Ocultas</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-bg-info mb-3">
            <div class="card-body">
                <h5 class="card-title"><?= $editedContent ?> / <?= $totalContent ?></h5>
                <p class="card-text mb-0">Conteúdos Editados</p>
            </div>
        </div>
    </div>
</div>

<h4 class="mb-3">Páginas</h4>
<div class="row">
    <?php foreach ($pages as $page): ?>
    <div class="col-md-4 col-lg-3 mb-3">
        <div class="card card-page h-100">
            <div class="card-body">
                <h6 class="card-title"><?= htmlspecialchars(page_label($page), ENT_QUOTES, 'UTF-8') ?></h6>
                <p class="text-muted small mb-2"><?= htmlspecialchars($page, ENT_QUOTES, 'UTF-8') ?>.php</p>
                <div class="d-flex gap-2">
                    <a href="sections.php?page=<?= urlencode($page) ?>" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-eye"></i> Secções
                    </a>
                    <a href="content.php?page=<?= urlencode($page) ?>" class="btn btn-sm btn-outline-success">
                        <i class="bi bi-pencil"></i> Conteúdos
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
