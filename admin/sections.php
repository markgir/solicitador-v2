<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/../includes/functions.php';

$selectedPage = isset($_GET['page']) ? $_GET['page'] : null;
$pages = get_all_pages();
$pageTitle = 'Gerir Secções';

// Validate selectedPage against allowed pages
if ($selectedPage !== null && !in_array($selectedPage, $pages, true)) {
    $selectedPage = null;
}

$sections = [];
if ($selectedPage) {
    $sections = get_page_sections($selectedPage);
}

include __DIR__ . '/includes/header.php';
?>

<div class="page-header">
    <nav class="breadcrumb-admin" aria-label="breadcrumb">
        <ol class="breadcrumb mb-1">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Secções</li>
        </ol>
    </nav>
    <h2>Visibilidade das Secções</h2>
    <p class="text-muted mb-0">Controle quais secções são visíveis em cada página</p>
</div>

<!-- Page selector -->
<div class="row mb-4">
    <div class="col-md-5">
        <label class="form-label">Selecionar Página</label>
        <select id="pageSelector" class="form-select" onchange="window.location='sections.php?page='+this.value">
            <option value="">— Escolha uma página —</option>
            <?php foreach ($pages as $p): ?>
            <option value="<?= htmlspecialchars($p, ENT_QUOTES, 'UTF-8') ?>" <?= $selectedPage === $p ? 'selected' : '' ?>>
                <?= htmlspecialchars(page_label($p), ENT_QUOTES, 'UTF-8') ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
</div>

<?php if ($selectedPage && !empty($sections)): ?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span><i class="bi bi-layout-text-sidebar me-1"></i> <?= htmlspecialchars(page_label($selectedPage), ENT_QUOTES, 'UTF-8') ?></span>
        <span class="badge bg-secondary"><?= count($sections) ?> secções</span>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Secção</th>
                    <th>Chave</th>
                    <th class="text-center" style="width:100px">Visível</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sections as $sec): ?>
                <tr>
                    <td class="fw-medium"><?= htmlspecialchars($sec['section_label'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><code><?= htmlspecialchars($sec['section_key'], ENT_QUOTES, 'UTF-8') ?></code></td>
                    <td class="text-center section-toggle">
                        <div class="form-check form-switch d-inline-block mb-0">
                            <input class="form-check-input" type="checkbox" role="switch"
                                   data-section-id="<?= (int)$sec['id'] ?>"
                                   <?= $sec['visible'] ? 'checked' : '' ?>
                                   onchange="toggleSection(this, <?= (int)$sec['id'] ?>)">
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php elseif ($selectedPage): ?>
<div class="alert alert-info">
    <i class="bi bi-info-circle me-1"></i> Nenhuma secção encontrada para esta página.
</div>
<?php endif; ?>

<!-- Toast notification -->
<div class="toast-container">
    <div id="toast" class="toast align-items-center text-bg-success" role="alert">
        <div class="d-flex">
            <div class="toast-body" id="toastBody">Guardado com sucesso!</div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    </div>
</div>

<?php
$csrfToken = htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8');
$extraScripts = <<<SCRIPT
<script>
function toggleSection(el, id) {
    var visible = el.checked ? 1 : 0;
    fetch('ajax/toggle_section.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'X-CSRF-Token': '$csrfToken'
        },
        body: 'id=' + id + '&visible=' + visible
    })
    .then(function(r) { return r.json(); })
    .then(function(data) {
        var t = document.getElementById('toast');
        var tb = document.getElementById('toastBody');
        if (data.success) {
            t.className = 'toast align-items-center text-bg-success';
            tb.textContent = 'Secção atualizada!';
        } else {
            t.className = 'toast align-items-center text-bg-danger';
            tb.textContent = 'Erro ao guardar.';
            el.checked = !el.checked;
        }
        new bootstrap.Toast(t).show();
    })
    .catch(function() {
        el.checked = !el.checked;
        var t = document.getElementById('toast');
        var tb = document.getElementById('toastBody');
        t.className = 'toast align-items-center text-bg-danger';
        tb.textContent = 'Erro de ligação ao servidor.';
        new bootstrap.Toast(t).show();
    });
}
</script>
SCRIPT;
include __DIR__ . '/includes/footer.php';
?>
