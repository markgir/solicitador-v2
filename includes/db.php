<?php
require_once __DIR__ . '/config.php';

function getDB() {
    static $db = null;
    if ($db === null) {
        $dbDir = dirname(DB_PATH);
        if (!is_dir($dbDir)) {
            mkdir($dbDir, 0755, true);
        }
        $db = new SQLite3(DB_PATH);
        $db->busyTimeout(5000);
        $db->exec('PRAGMA journal_mode = WAL');
        $db->exec('PRAGMA foreign_keys = ON');
    }
    return $db;
}
