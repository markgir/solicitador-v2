<?php
session_start();
require_once __DIR__ . '/../includes/functions.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($username !== '' && $password !== '') {
        $db = getDB();
        $stmt = $db->prepare('SELECT id, password FROM users WHERE username = :u');
        $stmt->bindValue(':u', $username, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row && password_verify($password, $row['password'])) {
            session_regenerate_id(true);
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_user_id'] = $row['id'];
            $_SESSION['admin_username'] = $username;
            header('Location: index.php');
            exit;
        }
        $error = 'Utilizador ou palavra-passe incorretos.';
    } else {
        $error = 'Preencha todos os campos.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Backoffice</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/admin.css" rel="stylesheet">
</head>
<body class="login-wrapper">
    <div class="login-card">
        <div class="card">
            <div class="card-body">
                <div class="text-center mb-4">
                    <div class="mb-3">
                        <i class="bi bi-grid-3x3-gap-fill" style="font-size: 2rem; color: var(--admin-primary);"></i>
                    </div>
                    <h4 class="mb-1">Backoffice</h4>
                    <p class="text-muted small mb-0">Introduza as suas credenciais para aceder</p>
                </div>
                <?php if ($error): ?>
                    <div class="alert alert-danger py-2">
                        <i class="bi bi-exclamation-circle me-1"></i>
                        <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
                    </div>
                <?php endif; ?>
                <form method="post" autocomplete="off">
                    <div class="mb-3">
                        <label class="form-label">Utilizador</label>
                        <input type="text" name="username" class="form-control" required autofocus
                               placeholder="Introduza o utilizador"
                               value="<?= isset($username) ? htmlspecialchars($username, ENT_QUOTES, 'UTF-8') : '' ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Palavra-passe</label>
                        <input type="password" name="password" class="form-control" required
                               placeholder="Introduza a palavra-passe">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2 mt-1">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Entrar
                    </button>
                </form>
            </div>
        </div>
        <p class="text-center mt-3 small" style="color: rgba(255,255,255,0.4);">
            &copy; <?= date('Y') ?> — <?= defined('SITE_NAME') ? htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') : 'Solicitador' ?>
        </p>
    </div>
</body>
</html>
