        </main><!-- /.admin-content -->
        <footer class="admin-footer">
            Backoffice &copy; <?= date('Y') ?>
        </footer>
    </div><!-- /.admin-main -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script>
    function toggleSidebar() {
        document.getElementById('adminSidebar').classList.toggle('open');
        document.getElementById('sidebarOverlay').classList.toggle('open');
    }
    function closeSidebar() {
        document.getElementById('adminSidebar').classList.remove('open');
        document.getElementById('sidebarOverlay').classList.remove('open');
    }
    </script>
    <?php if (isset($extraScripts)) echo $extraScripts; ?>
</body>
</html>
