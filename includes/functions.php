<?php
require_once __DIR__ . '/db.php';

/**
 * Check if a section is visible on a given page.
 */
function section_visible($page, $section_key) {
    $db = getDB();
    $stmt = $db->prepare('SELECT visible FROM sections WHERE page = :page AND section_key = :key');
    $stmt->bindValue(':page', $page, SQLITE3_TEXT);
    $stmt->bindValue(':key', $section_key, SQLITE3_TEXT);
    $result = $stmt->execute()->fetchArray(SQLITE3_ASSOC);
    if ($result === false) {
        return true;
    }
    return (bool) $result['visible'];
}

/**
 * Get content value by key, with fallback to default.
 */
function c($key, $default = '', $page = null) {
    if ($page === null) {
        global $current_page;
        $page = isset($current_page) ? $current_page : 'global';
    }
    $db = getDB();
    $stmt = $db->prepare('SELECT content_value FROM content WHERE page = :page AND content_key = :key');
    $stmt->bindValue(':page', $page, SQLITE3_TEXT);
    $stmt->bindValue(':key', $key, SQLITE3_TEXT);
    $result = $stmt->execute()->fetchArray(SQLITE3_ASSOC);
    if ($result === false || $result['content_value'] === null || $result['content_value'] === '') {
        return htmlspecialchars($default, ENT_QUOTES, 'UTF-8');
    }
    return htmlspecialchars($result['content_value'], ENT_QUOTES, 'UTF-8');
}

/**
 * Get raw HTML content (for rich text fields).
 */
function cHtml($key, $default = '', $page = null) {
    if ($page === null) {
        global $current_page;
        $page = isset($current_page) ? $current_page : 'global';
    }
    $db = getDB();
    $stmt = $db->prepare('SELECT content_value FROM content WHERE page = :page AND content_key = :key');
    $stmt->bindValue(':page', $page, SQLITE3_TEXT);
    $stmt->bindValue(':key', $key, SQLITE3_TEXT);
    $result = $stmt->execute()->fetchArray(SQLITE3_ASSOC);
    if ($result === false || $result['content_value'] === null || $result['content_value'] === '') {
        return $default;
    }
    return $result['content_value'];
}

/**
 * Get all sections for a given page.
 */
function get_page_sections($page) {
    $db = getDB();
    $stmt = $db->prepare('SELECT * FROM sections WHERE page = :page ORDER BY sort_order ASC');
    $stmt->bindValue(':page', $page, SQLITE3_TEXT);
    $result = $stmt->execute();
    $sections = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $sections[] = $row;
    }
    return $sections;
}

/**
 * Get all content entries for a given page.
 */
function get_page_content($page) {
    $db = getDB();
    $stmt = $db->prepare('SELECT * FROM content WHERE page = :page ORDER BY id ASC');
    $stmt->bindValue(':page', $page, SQLITE3_TEXT);
    $result = $stmt->execute();
    $content = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $content[] = $row;
    }
    return $content;
}

/**
 * Get list of all pages that have sections defined.
 */
function get_all_pages() {
    $db = getDB();
    $result = $db->query('SELECT DISTINCT page FROM sections ORDER BY page ASC');
    $pages = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $pages[] = $row['page'];
    }
    return $pages;
}

/**
 * Human-readable page names.
 */
function page_label($page) {
    $labels = [
        'index'             => 'Página Inicial (Variante 1)',
        'index-2'           => 'Página Inicial (Variante 2)',
        'index-3'           => 'Página Inicial (Variante 3)',
        'about'             => 'Sobre Nós',
        'services'          => 'Serviços',
        'service-details'   => 'Detalhes do Serviço',
        'portfolios'        => 'Portfólio',
        'portfolio-details' => 'Detalhes do Portfólio',
        'blog-standard'     => 'Blog',
        'blog-details'      => 'Detalhes do Blog',
        'team'              => 'Equipa',
        'pricing'           => 'Preços',
        'faq'               => 'FAQ',
        'contact'           => 'Contacto',
        'error'             => 'Página de Erro',
        'global'            => 'Global (Header/Footer)',
    ];
    return isset($labels[$page]) ? $labels[$page] : ucfirst(str_replace('-', ' ', $page));
}
