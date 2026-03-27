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

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Visibilidade das Secções</h2>
</div>

<!-- Page selector -->
<div class="row mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold">Selecionar Página</label>
        <select id="pageSelector" class="form-select" onchange="window.location='sections.php?page='+this.value">
            <option value="">— Escolha uma página —</option>
            <?php foreach ($pages as $p): ?>
            <option value="<?= htmlspecialchars($p, ENT_QUOTES, 'UTF-8') ?>" <?= $selectedPage === $p ? 'selected' : '' ?>>
                <?= htmlspecialchars(page_label($p), ENT_QUOTES, 'UTF-8') ?> (<?= htmlspecialchars($p, ENT_QUOTES, 'UTF-8') ?>)
            </option>
            <?php endforeach; ?>
        </select>
    </div>
</div>

<?php if ($selectedPage && !empty($sections)): ?>
<div class="card">
    <div class="card-header">
        <strong><?= htmlspecialchars(page_label($selectedPage), ENT_QUOTES, 'UTF-8') ?></strong> — Secções
    </div>
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead class="table-light">
                <tr>
                    <th>Secção</th>
                    <th>Chave</th>
                    <th class="text-center" style="width:120px">Visível</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sections as $sec): ?>
                <tr>
                    <td><?= htmlspecialchars($sec['section_label'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><code><?= htmlspecialchars($sec['section_key'], ENT_QUOTES, 'UTF-8') ?></code></td>
                    <td class="text-center section-toggle">
                        <div class="form-check form-switch d-inline-block">
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
<div class="alert alert-info">Nenhuma secção encontrada para esta página.</div>
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
$extraScripts = <<<'JS'
<script>
function toggleSection(el, id) {
    const visible = el.checked ? 1 : 0;
    fetch('ajax/toggle_section.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: 'id=' + id + '&visible=' + visible
    })
    .then(r => r.json())
    .then(data => {
        const t = document.getElementById('toast');
        const tb = document.getElementById('toastBody');
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
    .catch(() => {
        el.checked = !el.checked;
        alert('Erro de ligação.');
    });
}
</script>
JS;
include __DIR__ . '/includes/footer.php';
?>
