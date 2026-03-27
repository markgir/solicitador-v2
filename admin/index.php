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

<div class="page-header">
    <h2>Dashboard</h2>
    <p class="text-muted mb-0">Visão geral do backoffice</p>
</div>

<div class="row mb-4 g-3">
    <div class="col-sm-6 col-xl-3">
        <div class="card stat-card">
            <div class="card-body">
                <div class="stat-icon bg-primary-subtle">
                    <i class="bi bi-files"></i>
                </div>
                <div>
                    <div class="stat-value"><?= count($pages) ?></div>
                    <div class="stat-label">Páginas</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card stat-card">
            <div class="card-body">
                <div class="stat-icon bg-success-subtle">
                    <i class="bi bi-layout-text-sidebar"></i>
                </div>
                <div>
                    <div class="stat-value"><?= $totalSections ?></div>
                    <div class="stat-label">Secções</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card stat-card">
            <div class="card-body">
                <div class="stat-icon bg-warning-subtle">
                    <i class="bi bi-eye-slash"></i>
                </div>
                <div>
                    <div class="stat-value"><?= $hiddenSections ?></div>
                    <div class="stat-label">Secções Ocultas</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card stat-card">
            <div class="card-body">
                <div class="stat-icon bg-info-subtle">
                    <i class="bi bi-pencil-square"></i>
                </div>
                <div>
                    <div class="stat-value"><?= $editedContent ?><span style="font-size:0.7em;font-weight:400;color:var(--admin-text-muted)"> / <?= $totalContent ?></span></div>
                    <div class="stat-label">Conteúdos Editados</div>
                </div>
            </div>
        </div>
    </div>
</div>

<h5 class="section-heading mb-3">Páginas</h5>
<div class="row g-3">
    <?php foreach ($pages as $page): ?>
    <div class="col-md-4 col-lg-3">
        <div class="card card-page h-100">
            <div class="card-body">
                <h6 class="card-title"><?= htmlspecialchars(page_label($page), ENT_QUOTES, 'UTF-8') ?></h6>
                <p class="text-muted small mb-2"><?= htmlspecialchars($page, ENT_QUOTES, 'UTF-8') ?>.php</p>
                <div class="d-flex gap-2">
                    <a href="sections.php?page=<?= urlencode($page) ?>" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-layout-text-sidebar"></i> Secções
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
