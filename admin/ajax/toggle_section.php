<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    echo json_encode(['success' => false, 'error' => 'Not authenticated']);
    exit;
}

// CSRF validation
$csrfHeader = isset($_SERVER['HTTP_X_CSRF_TOKEN']) ? $_SERVER['HTTP_X_CSRF_TOKEN'] : '';
if (empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $csrfHeader)) {
    echo json_encode(['success' => false, 'error' => 'Invalid CSRF token']);
    exit;
}

require_once __DIR__ . '/../../includes/functions.php';

$id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
$visible = isset($_POST['visible']) ? (int) $_POST['visible'] : 0;

if ($id <= 0) {
    echo json_encode(['success' => false, 'error' => 'Invalid ID']);
    exit;
}

$visible = $visible ? 1 : 0;
$db = getDB();
$stmt = $db->prepare('UPDATE sections SET visible = :v WHERE id = :id');
$stmt->bindValue(':v', $visible, SQLITE3_INTEGER);
$stmt->bindValue(':id', $id, SQLITE3_INTEGER);
$stmt->execute();

echo json_encode(['success' => true, 'visible' => $visible]);
