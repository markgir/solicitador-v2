<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/../includes/functions.php';

$selectedPage = isset($_GET['page']) ? $_GET['page'] : null;
$pages = get_all_pages();
$pageTitle = 'Gerir Secções';

$sections = [];
if ($selectedPage) {
    $sections = get_page_sections($selectedPage);
}

include __DIR__ . '/includes/header.php';
?>

<!-- Page selector -->
<div class="page-selector">
    <label class="form-label">Página</label>
    <select id="pageSelector" class="form-select" onchange="window.location='sections.php?page='+this.value">
        <option value="">— Escolha uma página —</option>
        <?php foreach ($pages as $p): ?>
        <option value="<?= htmlspecialchars($p, ENT_QUOTES, 'UTF-8') ?>" <?= $selectedPage === $p ? 'selected' : '' ?>>
            <?= htmlspecialchars(page_label($p), ENT_QUOTES, 'UTF-8') ?>
        </option>
        <?php endforeach; ?>
    </select>
</div>

<?php if ($selectedPage && !empty($sections)): ?>
<div class="panel">
    <div class="panel-header">
        <span><?= htmlspecialchars(page_label($selectedPage), ENT_QUOTES, 'UTF-8') ?></span>
    </div>
    <table class="table-clean">
        <thead>
            <tr>
                <th>Secção</th>
                <th>Chave</th>
                <th style="width:100px;text-align:center">Visível</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sections as $sec): ?>
            <tr>
                <td><?= htmlspecialchars($sec['section_label'], ENT_QUOTES, 'UTF-8') ?></td>
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
<?php elseif ($selectedPage): ?>
<div class="empty-state">
    <i class="bi bi-layout-text-sidebar"></i>
    <p>Nenhuma secção encontrada para esta página.</p>
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
        alert('Erro de ligação.');
    });
}
</script>
SCRIPT;
include __DIR__ . '/includes/footer.php';
?>
