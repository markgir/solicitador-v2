    </div><!-- /.admin-content -->
    <footer class="admin-footer">
        <small>Backoffice &copy; <?= date('Y') ?> — <?= defined('SITE_NAME') ? htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') : 'Solicitador' ?></small>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php if (isset($extraScripts)) echo $extraScripts; ?>
</body>
</html>
