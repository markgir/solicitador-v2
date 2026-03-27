<?php
// Determine the current page for active-state highlighting
$currentFile = basename($_SERVER['SCRIPT_NAME'], '.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') . ' — ' : '' ?>Backoffice</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/admin.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar overlay for mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

    <!-- Sidebar -->
    <aside class="admin-sidebar" id="adminSidebar">
        <a href="index.php" class="sidebar-brand">
            <span class="brand-icon"><i class="bi bi-grid-fill"></i></span>
            Backoffice
        </a>
        <div class="sidebar-label">Menu</div>
        <ul class="sidebar-nav">
            <li>
                <a href="index.php" class="<?= $currentFile === 'index' ? 'active' : '' ?>">
                    <i class="bi bi-house"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="sections.php" class="<?= $currentFile === 'sections' ? 'active' : '' ?>">
                    <i class="bi bi-layout-text-sidebar"></i> Secções
                </a>
            </li>
            <li>
                <a href="content.php" class="<?= $currentFile === 'content' ? 'active' : '' ?>">
                    <i class="bi bi-pencil-square"></i> Conteúdos
                </a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <a href="logout.php"><i class="bi bi-box-arrow-left"></i> Terminar Sessão</a>
        </div>
    </aside>

    <!-- Main wrapper -->
    <div class="admin-main">
        <header class="admin-topbar">
            <div style="display:flex;align-items:center;gap:.75rem">
                <button class="sidebar-toggle" onclick="toggleSidebar()" aria-label="Menu">
                    <i class="bi bi-list"></i>
                </button>
                <h1 class="topbar-title"><?= isset($pageTitle) ? htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') : 'Backoffice' ?></h1>
            </div>
            <div class="topbar-actions">
                <a href="../index.php" target="_blank" class="btn-site">
                    <i class="bi bi-box-arrow-up-right"></i> Ver Site
                </a>
            </div>
        </header>
        <main class="admin-content">
