<?php
/**
 * Database initialization script.
 * Creates tables and seeds initial data (sections, default admin user, content keys).
 * Run once: php database/init.php
 */
require_once __DIR__ . '/../includes/db.php';

$db = getDB();

// Create tables
$db->exec('
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
');

$db->exec('
    CREATE TABLE IF NOT EXISTS sections (
        id INT AUTO_INCREMENT PRIMARY KEY,
        page VARCHAR(255) NOT NULL,
        section_key VARCHAR(255) NOT NULL,
        section_label VARCHAR(255) NOT NULL,
        visible TINYINT DEFAULT 1,
        sort_order INT DEFAULT 0,
        UNIQUE KEY page_section (page, section_key)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
');

$db->exec('
    CREATE TABLE IF NOT EXISTS content (
        id INT AUTO_INCREMENT PRIMARY KEY,
        page VARCHAR(255) NOT NULL,
        content_key VARCHAR(255) NOT NULL,
        content_value TEXT DEFAULT NULL,
        content_type VARCHAR(50) DEFAULT \'text\',
        label VARCHAR(255),
        UNIQUE KEY page_content (page, content_key)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
');

// Seed default admin user (admin / admin123) - change password after first login!
$stmt = $db->prepare('SELECT id FROM users WHERE username = :u');
$stmt->bindValue(':u', 'admin', PDO::PARAM_STR);
$stmt->execute();
$existingUser = $stmt->fetchColumn();
if (!$existingUser) {
    $hash = password_hash('admin123', PASSWORD_DEFAULT);
    $stmt = $db->prepare('INSERT INTO users (username, password) VALUES (:u, :p)');
    $stmt->bindValue(':u', 'admin', PDO::PARAM_STR);
    $stmt->bindValue(':p', $hash, PDO::PARAM_STR);
    $stmt->execute();
    echo "Default admin user created (admin / admin123)\n";
}

// --- Seed sections for all pages ---
$sections = [
    // Global (shared header/footer)
    ['global', 'header', 'Header / Navegação', 1, 1],
    ['global', 'footer', 'Rodapé', 1, 99],

    // index.html (Home variant 1)
    ['index', 'hero', 'Hero Banner', 1, 1],
    ['index', 'offer', 'Serviços / Ofertas', 1, 2],
    ['index', 'about', 'Sobre Nós', 1, 3],
    ['index', 'why-choose', 'Porquê Escolher-nos', 1, 4],
    ['index', 'team', 'Equipa', 1, 5],
    ['index', 'projects', 'Projetos', 1, 6],
    ['index', 'pricing', 'Preços', 1, 7],
    ['index', 'testimonial', 'Testemunhos', 1, 8],
    ['index', 'blog', 'Blog', 1, 9],
    ['index', 'marquee', 'Marquee', 1, 10],
    ['index', 'contact', 'Contacto', 1, 11],

    // index-2.html (Home variant 2)
    ['index-2', 'hero', 'Hero Banner', 1, 1],
    ['index-2', 'about', 'Sobre Nós', 1, 2],
    ['index-2', 'services', 'Serviços', 1, 3],
    ['index-2', 'counter', 'Contadores', 1, 4],
    ['index-2', 'projects', 'Projetos', 1, 5],
    ['index-2', 'process', 'Processo', 1, 6],
    ['index-2', 'team', 'Equipa', 1, 7],
    ['index-2', 'faq', 'FAQ', 1, 8],
    ['index-2', 'testimonial', 'Testemunhos', 1, 9],
    ['index-2', 'blog', 'Blog', 1, 10],

    // index-3.html (Home variant 3)
    ['index-3', 'hero', 'Hero Banner', 1, 1],
    ['index-3', 'feature', 'Destaques', 1, 2],
    ['index-3', 'about', 'Sobre Nós', 1, 3],
    ['index-3', 'services', 'Serviços', 1, 4],
    ['index-3', 'team', 'Equipa', 1, 5],
    ['index-3', 'counter', 'Contadores', 1, 6],
    ['index-3', 'progress', 'Progressos', 1, 7],
    ['index-3', 'testimonial', 'Testemunhos', 1, 8],
    ['index-3', 'projects', 'Projetos', 1, 9],
    ['index-3', 'process', 'Processo', 1, 10],
    ['index-3', 'cta', 'Call to Action', 1, 11],
    ['index-3', 'blog', 'Blog', 1, 12],
    ['index-3', 'marquee', 'Marquee', 1, 13],

    // about.html
    ['about', 'page-header', 'Cabeçalho da Página', 1, 1],
    ['about', 'feature', 'Destaques', 1, 2],
    ['about', 'about', 'Sobre Nós', 1, 3],
    ['about', 'counter', 'Contadores', 1, 4],
    ['about', 'progress', 'Progressos', 1, 5],
    ['about', 'team', 'Equipa', 1, 6],
    ['about', 'projects', 'Projetos', 1, 7],
    ['about', 'testimonial', 'Testemunhos', 1, 8],
    ['about', 'blog', 'Blog', 1, 9],

    // services.html
    ['services', 'page-header', 'Cabeçalho da Página', 1, 1],
    ['services', 'services', 'Serviços', 1, 2],
    ['services', 'faq', 'FAQ', 1, 3],
    ['services', 'why-choose', 'Porquê Escolher-nos', 1, 4],
    ['services', 'pricing', 'Preços', 1, 5],
    ['services', 'process', 'Processo', 1, 6],
    ['services', 'cta', 'Call to Action', 1, 7],
    ['services', 'blog', 'Blog', 1, 8],

    // service-details.html
    ['service-details', 'page-header', 'Cabeçalho da Página', 1, 1],
    ['service-details', 'details', 'Detalhes do Serviço', 1, 2],

    // portfolios.html
    ['portfolios', 'page-header', 'Cabeçalho da Página', 1, 1],
    ['portfolios', 'projects', 'Projetos', 1, 2],

    // portfolio-details.html
    ['portfolio-details', 'page-header', 'Cabeçalho da Página', 1, 1],
    ['portfolio-details', 'details', 'Detalhes do Projeto', 1, 2],

    // blog-standard.html
    ['blog-standard', 'page-header', 'Cabeçalho da Página', 1, 1],
    ['blog-standard', 'posts', 'Lista de Posts', 1, 2],

    // blog-details.html
    ['blog-details', 'page-header', 'Cabeçalho da Página', 1, 1],
    ['blog-details', 'details', 'Detalhes do Post', 1, 2],

    // team.html
    ['team', 'page-header', 'Cabeçalho da Página', 1, 1],
    ['team', 'team', 'Equipa', 1, 2],

    // pricing.html
    ['pricing', 'page-header', 'Cabeçalho da Página', 1, 1],
    ['pricing', 'pricing', 'Preços', 1, 2],

    // faq.html
    ['faq', 'page-header', 'Cabeçalho da Página', 1, 1],
    ['faq', 'faq', 'FAQ', 1, 2],

    // contact.html
    ['contact', 'page-header', 'Cabeçalho da Página', 1, 1],
    ['contact', 'contact', 'Contacto', 1, 2],

    // error.html
    ['error', 'page-header', 'Cabeçalho da Página', 1, 1],
    ['error', 'error', 'Página de Erro', 1, 2],
];

$stmtSec = $db->prepare('INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES (:page, :key, :label, :visible, :sort)');
foreach ($sections as $s) {
    $stmtSec->bindValue(':page', $s[0], PDO::PARAM_STR);
    $stmtSec->bindValue(':key', $s[1], PDO::PARAM_STR);
    $stmtSec->bindValue(':label', $s[2], PDO::PARAM_STR);
    $stmtSec->bindValue(':visible', $s[3], PDO::PARAM_INT);
    $stmtSec->bindValue(':sort', $s[4], PDO::PARAM_INT);
    $stmtSec->execute();
}
echo "Sections seeded (" . count($sections) . " entries)\n";

// --- Seed content keys for all pages ---
// Format: [page, key, label, default_value, type]
// type: 'text' for single-line, 'textarea' for multi-line, 'html' for rich text
$contentKeys = [
    // Global header/footer
    ['global', 'site_name', 'Nome do Site', 'Rovix', 'text'],
    ['global', 'phone', 'Telefone', '+351 000 000 000', 'text'],
    ['global', 'email', 'Email', 'info@example.com', 'text'],
    ['global', 'address', 'Morada', 'Lisboa, Portugal', 'text'],
    ['global', 'footer_description', 'Descrição do Rodapé', 'Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium.', 'textarea'],
    ['global', 'copyright', 'Copyright', '© 2024 Rovix. Todos os direitos reservados.', 'text'],
    ['global', 'facebook_url', 'Facebook URL', '#', 'text'],
    ['global', 'twitter_url', 'Twitter URL', '#', 'text'],
    ['global', 'linkedin_url', 'LinkedIn URL', '#', 'text'],
    ['global', 'instagram_url', 'Instagram URL', '#', 'text'],

    // index - Hero
    ['index', 'hero_subtitle', 'Hero — Subtítulo', 'Business Solutions', 'text'],
    ['index', 'hero_title', 'Hero — Título', 'Transforming Your Business Vision Into Reality', 'text'],
    ['index', 'hero_description', 'Hero — Descrição', 'Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium.', 'textarea'],
    ['index', 'hero_btn_text', 'Hero — Texto do Botão', 'Our Services', 'text'],
    ['index', 'hero_btn_url', 'Hero — URL do Botão', 'services.php', 'text'],

    // index - Offer/Services
    ['index', 'offer_subtitle', 'Oferta — Subtítulo', 'What We Offer', 'text'],
    ['index', 'offer_title', 'Oferta — Título', 'Comprehensive Range of Professional Services', 'text'],

    // index - About
    ['index', 'about_subtitle', 'Sobre — Subtítulo', 'About Company', 'text'],
    ['index', 'about_title', 'Sobre — Título', 'Empowering Business Growth with Expert Consulting', 'text'],
    ['index', 'about_description', 'Sobre — Descrição', '', 'textarea'],

    // index - Why Choose
    ['index', 'why_choose_subtitle', 'Porquê — Subtítulo', 'Why Choose Us', 'text'],
    ['index', 'why_choose_title', 'Porquê — Título', 'Why Businesses Trust Our Consulting Expertise', 'text'],

    // index - Team
    ['index', 'team_subtitle', 'Equipa — Subtítulo', 'Team Member', 'text'],
    ['index', 'team_title', 'Equipa — Título', 'Meet the Experts Behind Your Business Success', 'text'],

    // index - Projects
    ['index', 'projects_subtitle', 'Projetos — Subtítulo', 'Our Projects', 'text'],
    ['index', 'projects_title', 'Projetos — Título', 'Recent Works to Showcase Our Expertise', 'text'],

    // index - Pricing
    ['index', 'pricing_subtitle', 'Preços — Subtítulo', 'Pricing Plans', 'text'],
    ['index', 'pricing_title', 'Preços — Título', 'Flexible Plans Tailored to Business Goals', 'text'],

    // index - Testimonial
    ['index', 'testimonial_subtitle', 'Testemunhos — Subtítulo', 'Testimonials', 'text'],
    ['index', 'testimonial_title', 'Testemunhos — Título', 'What Our Clients Say About Our Consulting Services', 'text'],

    // index - Blog
    ['index', 'blog_subtitle', 'Blog — Subtítulo', 'Latest Blog', 'text'],
    ['index', 'blog_title', 'Blog — Título', 'Insights and Trends in Business Consulting', 'text'],

    // index - Contact
    ['index', 'contact_title', 'Contacto — Título', 'Let\'s discuss your next project', 'text'],
    ['index', 'contact_description', 'Contacto — Descrição', '', 'textarea'],

    // index-2 - Hero
    ['index-2', 'hero_title', 'Hero — Título', 'Strategic Consulting for a Changing World', 'text'],
    ['index-2', 'hero_description', 'Hero — Descrição', '', 'textarea'],
    ['index-2', 'hero_btn_text', 'Hero — Texto do Botão', 'Our Services', 'text'],

    // index-2 - About
    ['index-2', 'about_subtitle', 'Sobre — Subtítulo', 'About Company', 'text'],
    ['index-2', 'about_title', 'Sobre — Título', 'Empowering Business Growth with Expert Consulting', 'text'],

    // index-2 - Services
    ['index-2', 'services_subtitle', 'Serviços — Subtítulo', 'Our Services', 'text'],
    ['index-2', 'services_title', 'Serviços — Título', 'Comprehensive Range of Professional Services', 'text'],

    // index-2 - Projects
    ['index-2', 'projects_subtitle', 'Projetos — Subtítulo', 'Our Projects', 'text'],
    ['index-2', 'projects_title', 'Projetos — Título', 'Recent Works to Showcase Our Expertise', 'text'],

    // index-2 - Process
    ['index-2', 'process_subtitle', 'Processo — Subtítulo', 'Our Process', 'text'],
    ['index-2', 'process_title', 'Processo — Título', 'Streamlined Work Process for Results', 'text'],

    // index-2 - Team
    ['index-2', 'team_subtitle', 'Equipa — Subtítulo', 'Team Member', 'text'],
    ['index-2', 'team_title', 'Equipa — Título', 'Meet the Experts Behind Your Business Success', 'text'],

    // index-2 - FAQ
    ['index-2', 'faq_subtitle', 'FAQ — Subtítulo', 'FAQ', 'text'],
    ['index-2', 'faq_title', 'FAQ — Título', 'Frequently Asked Questions', 'text'],

    // index-2 - Testimonial
    ['index-2', 'testimonial_subtitle', 'Testemunhos — Subtítulo', 'Testimonials', 'text'],
    ['index-2', 'testimonial_title', 'Testemunhos — Título', 'What Our Clients Say', 'text'],

    // index-2 - Blog
    ['index-2', 'blog_subtitle', 'Blog — Subtítulo', 'Latest Blog', 'text'],
    ['index-2', 'blog_title', 'Blog — Título', 'Insights and Trends in Business Consulting', 'text'],

    // index-3 - Hero
    ['index-3', 'hero_title', 'Hero — Título', 'Expert Consulting for Business Excellence', 'text'],
    ['index-3', 'hero_description', 'Hero — Descrição', '', 'textarea'],
    ['index-3', 'hero_btn_text', 'Hero — Texto do Botão', 'Our Services', 'text'],

    // index-3 sections
    ['index-3', 'about_subtitle', 'Sobre — Subtítulo', 'About Company', 'text'],
    ['index-3', 'about_title', 'Sobre — Título', 'Empowering Business Growth', 'text'],
    ['index-3', 'services_subtitle', 'Serviços — Subtítulo', 'Our Services', 'text'],
    ['index-3', 'services_title', 'Serviços — Título', 'Comprehensive Professional Services', 'text'],
    ['index-3', 'team_subtitle', 'Equipa — Subtítulo', 'Team Member', 'text'],
    ['index-3', 'team_title', 'Equipa — Título', 'Meet the Experts', 'text'],
    ['index-3', 'projects_subtitle', 'Projetos — Subtítulo', 'Our Projects', 'text'],
    ['index-3', 'projects_title', 'Projetos — Título', 'Recent Works', 'text'],
    ['index-3', 'blog_subtitle', 'Blog — Subtítulo', 'Latest Blog', 'text'],
    ['index-3', 'blog_title', 'Blog — Título', 'Insights and Trends', 'text'],
    ['index-3', 'cta_title', 'CTA — Título', 'Ready to Transform Your Business?', 'text'],

    // about.html
    ['about', 'page_title', 'Título da Página', 'About Us', 'text'],
    ['about', 'about_subtitle', 'Sobre — Subtítulo', 'About Company', 'text'],
    ['about', 'about_title', 'Sobre — Título', 'Empowering Business Growth with Expert Consulting', 'text'],
    ['about', 'about_description', 'Sobre — Descrição', '', 'textarea'],

    // services.html
    ['services', 'page_title', 'Título da Página', 'Our Services', 'text'],
    ['services', 'services_subtitle', 'Serviços — Subtítulo', 'Our Services', 'text'],
    ['services', 'services_title', 'Serviços — Título', 'Comprehensive Range of Professional Services', 'text'],

    // service-details.html
    ['service-details', 'page_title', 'Título da Página', 'Service Details', 'text'],

    // portfolios.html
    ['portfolios', 'page_title', 'Título da Página', 'Our Portfolio', 'text'],

    // portfolio-details.html
    ['portfolio-details', 'page_title', 'Título da Página', 'Portfolio Details', 'text'],

    // blog-standard.html
    ['blog-standard', 'page_title', 'Título da Página', 'Blog Standard', 'text'],

    // blog-details.html
    ['blog-details', 'page_title', 'Título da Página', 'Blog Details', 'text'],

    // team.html
    ['team', 'page_title', 'Título da Página', 'Our Team', 'text'],
    ['team', 'team_subtitle', 'Equipa — Subtítulo', 'Team Members', 'text'],
    ['team', 'team_title', 'Equipa — Título', 'Meet the Experts Behind Your Business Success', 'text'],

    // pricing.html
    ['pricing', 'page_title', 'Título da Página', 'Pricing Plans', 'text'],
    ['pricing', 'pricing_subtitle', 'Preços — Subtítulo', 'Pricing Plans', 'text'],
    ['pricing', 'pricing_title', 'Preços — Título', 'Flexible Plans Tailored to Business Goals', 'text'],

    // faq.html
    ['faq', 'page_title', 'Título da Página', 'FAQ', 'text'],
    ['faq', 'faq_subtitle', 'FAQ — Subtítulo', 'FAQ', 'text'],
    ['faq', 'faq_title', 'FAQ — Título', 'Frequently Asked Questions', 'text'],

    // contact.html
    ['contact', 'page_title', 'Título da Página', 'Contact Us', 'text'],
    ['contact', 'contact_subtitle', 'Contacto — Subtítulo', 'Contact Us', 'text'],
    ['contact', 'contact_title', 'Contacto — Título', 'Get in Touch With Us', 'text'],
    ['contact', 'contact_address', 'Morada', 'Lisboa, Portugal', 'text'],
    ['contact', 'contact_phone', 'Telefone', '+351 000 000 000', 'text'],
    ['contact', 'contact_email', 'Email', 'info@example.com', 'text'],

    // error.html
    ['error', 'page_title', 'Título da Página', '404', 'text'],
    ['error', 'error_title', 'Erro — Título', 'Page Not Found', 'text'],
    ['error', 'error_description', 'Erro — Descrição', 'Sorry, the page you are looking for does not exist.', 'textarea'],
];

$stmtContent = $db->prepare('INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES (:page, :key, :value, :type, :label)');
foreach ($contentKeys as $ck) {
    $stmtContent->bindValue(':page', $ck[0], PDO::PARAM_STR);
    $stmtContent->bindValue(':key', $ck[1], PDO::PARAM_STR);
    $stmtContent->bindValue(':value', null, PDO::PARAM_NULL);
    $stmtContent->bindValue(':type', $ck[4], PDO::PARAM_STR);
    $stmtContent->bindValue(':label', $ck[3], PDO::PARAM_STR);
    $stmtContent->execute();
}
echo "Content keys seeded (" . count($contentKeys) . " entries)\n";

echo "\nDatabase initialized successfully.\n";
