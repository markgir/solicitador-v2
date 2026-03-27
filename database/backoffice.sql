-- ============================================================
-- Solicitador v2 — Base de dados MySQL (backoffice)
-- ============================================================
-- Este ficheiro cria todas as tabelas e insere os dados iniciais.
--
-- Utilização:
--   1. Criar uma base de dados MySQL no painel de alojamento
--   2. Importar este ficheiro via phpMyAdmin (separador "Importar")
--   3. Configurar os dados em includes/config.php
-- ============================================================

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- -----------------------------------------------
-- Tabela: users
-- -----------------------------------------------
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -----------------------------------------------
-- Tabela: sections
-- -----------------------------------------------
CREATE TABLE IF NOT EXISTS sections (
    id INT AUTO_INCREMENT PRIMARY KEY,
    page VARCHAR(255) NOT NULL,
    section_key VARCHAR(255) NOT NULL,
    section_label VARCHAR(255) NOT NULL,
    visible TINYINT DEFAULT 1,
    sort_order INT DEFAULT 0,
    UNIQUE KEY page_section (page, section_key)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -----------------------------------------------
-- Tabela: content
-- -----------------------------------------------
CREATE TABLE IF NOT EXISTS content (
    id INT AUTO_INCREMENT PRIMARY KEY,
    page VARCHAR(255) NOT NULL,
    content_key VARCHAR(255) NOT NULL,
    content_value TEXT DEFAULT NULL,
    content_type VARCHAR(50) DEFAULT 'text',
    label VARCHAR(255),
    UNIQUE KEY page_content (page, content_key)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

SET FOREIGN_KEY_CHECKS = 1;

-- -----------------------------------------------
-- Utilizador admin por defeito (admin / admin123)
-- ⚠️  Altere a password após o primeiro login!
-- -----------------------------------------------
INSERT IGNORE INTO users (username, password) VALUES ('admin', '$2y$10$/RHmnhYL0ldNpAofOgDo/e3AeTfD/74QnsvNF3FggfQ/LONiQNsza');

-- -----------------------------------------------
-- Secções de todas as páginas
-- -----------------------------------------------

-- Global (header / footer)
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('global', 'header', 'Header / Navegação', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('global', 'footer', 'Rodapé', 1, 99);

-- index (Home variante 1)
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index', 'hero', 'Hero Banner', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index', 'offer', 'Serviços / Ofertas', 1, 2);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index', 'about', 'Sobre Nós', 1, 3);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index', 'why-choose', 'Porquê Escolher-nos', 1, 4);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index', 'team', 'Equipa', 1, 5);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index', 'projects', 'Projetos', 1, 6);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index', 'pricing', 'Preços', 1, 7);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index', 'testimonial', 'Testemunhos', 1, 8);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index', 'blog', 'Blog', 1, 9);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index', 'marquee', 'Marquee', 1, 10);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index', 'contact', 'Contacto', 1, 11);

-- index-2 (Home variante 2)
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-2', 'hero', 'Hero Banner', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-2', 'about', 'Sobre Nós', 1, 2);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-2', 'services', 'Serviços', 1, 3);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-2', 'counter', 'Contadores', 1, 4);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-2', 'projects', 'Projetos', 1, 5);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-2', 'process', 'Processo', 1, 6);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-2', 'team', 'Equipa', 1, 7);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-2', 'faq', 'FAQ', 1, 8);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-2', 'testimonial', 'Testemunhos', 1, 9);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-2', 'blog', 'Blog', 1, 10);

-- index-3 (Home variante 3)
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-3', 'hero', 'Hero Banner', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-3', 'feature', 'Destaques', 1, 2);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-3', 'about', 'Sobre Nós', 1, 3);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-3', 'services', 'Serviços', 1, 4);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-3', 'team', 'Equipa', 1, 5);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-3', 'counter', 'Contadores', 1, 6);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-3', 'progress', 'Progressos', 1, 7);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-3', 'testimonial', 'Testemunhos', 1, 8);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-3', 'projects', 'Projetos', 1, 9);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-3', 'process', 'Processo', 1, 10);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-3', 'cta', 'Call to Action', 1, 11);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-3', 'blog', 'Blog', 1, 12);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('index-3', 'marquee', 'Marquee', 1, 13);

-- about
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('about', 'page-header', 'Cabeçalho da Página', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('about', 'feature', 'Destaques', 1, 2);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('about', 'about', 'Sobre Nós', 1, 3);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('about', 'counter', 'Contadores', 1, 4);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('about', 'progress', 'Progressos', 1, 5);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('about', 'team', 'Equipa', 1, 6);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('about', 'projects', 'Projetos', 1, 7);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('about', 'testimonial', 'Testemunhos', 1, 8);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('about', 'blog', 'Blog', 1, 9);

-- services
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('services', 'page-header', 'Cabeçalho da Página', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('services', 'services', 'Serviços', 1, 2);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('services', 'faq', 'FAQ', 1, 3);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('services', 'why-choose', 'Porquê Escolher-nos', 1, 4);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('services', 'pricing', 'Preços', 1, 5);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('services', 'process', 'Processo', 1, 6);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('services', 'cta', 'Call to Action', 1, 7);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('services', 'blog', 'Blog', 1, 8);

-- service-details
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('service-details', 'page-header', 'Cabeçalho da Página', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('service-details', 'details', 'Detalhes do Serviço', 1, 2);

-- portfolios
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('portfolios', 'page-header', 'Cabeçalho da Página', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('portfolios', 'projects', 'Projetos', 1, 2);

-- portfolio-details
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('portfolio-details', 'page-header', 'Cabeçalho da Página', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('portfolio-details', 'details', 'Detalhes do Projeto', 1, 2);

-- blog-standard
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('blog-standard', 'page-header', 'Cabeçalho da Página', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('blog-standard', 'posts', 'Lista de Posts', 1, 2);

-- blog-details
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('blog-details', 'page-header', 'Cabeçalho da Página', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('blog-details', 'details', 'Detalhes do Post', 1, 2);

-- team
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('team', 'page-header', 'Cabeçalho da Página', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('team', 'team', 'Equipa', 1, 2);

-- pricing
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('pricing', 'page-header', 'Cabeçalho da Página', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('pricing', 'pricing', 'Preços', 1, 2);

-- faq
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('faq', 'page-header', 'Cabeçalho da Página', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('faq', 'faq', 'FAQ', 1, 2);

-- contact
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('contact', 'page-header', 'Cabeçalho da Página', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('contact', 'contact', 'Contacto', 1, 2);

-- error
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('error', 'page-header', 'Cabeçalho da Página', 1, 1);
INSERT IGNORE INTO sections (page, section_key, section_label, visible, sort_order) VALUES ('error', 'error', 'Página de Erro', 1, 2);

-- -----------------------------------------------
-- Conteúdos editáveis (chaves e labels)
-- content_value começa a NULL — os valores por
-- defeito são definidos diretamente nos templates.
-- -----------------------------------------------

-- Global (header / footer)
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('global', 'site_name', NULL, 'text', 'Nome do Site');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('global', 'phone', NULL, 'text', 'Telefone');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('global', 'email', NULL, 'text', 'Email');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('global', 'address', NULL, 'text', 'Morada');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('global', 'footer_description', NULL, 'textarea', 'Descrição do Rodapé');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('global', 'copyright', NULL, 'text', 'Copyright');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('global', 'facebook_url', NULL, 'text', 'Facebook URL');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('global', 'twitter_url', NULL, 'text', 'Twitter URL');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('global', 'linkedin_url', NULL, 'text', 'LinkedIn URL');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('global', 'instagram_url', NULL, 'text', 'Instagram URL');

-- index — Hero
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'hero_subtitle', NULL, 'text', 'Hero — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'hero_title', NULL, 'text', 'Hero — Título');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'hero_description', NULL, 'textarea', 'Hero — Descrição');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'hero_btn_text', NULL, 'text', 'Hero — Texto do Botão');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'hero_btn_url', NULL, 'text', 'Hero — URL do Botão');

-- index — Oferta / Serviços
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'offer_subtitle', NULL, 'text', 'Oferta — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'offer_title', NULL, 'text', 'Oferta — Título');

-- index — Sobre
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'about_subtitle', NULL, 'text', 'Sobre — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'about_title', NULL, 'text', 'Sobre — Título');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'about_description', NULL, 'textarea', 'Sobre — Descrição');

-- index — Porquê Escolher-nos
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'why_choose_subtitle', NULL, 'text', 'Porquê — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'why_choose_title', NULL, 'text', 'Porquê — Título');

-- index — Equipa
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'team_subtitle', NULL, 'text', 'Equipa — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'team_title', NULL, 'text', 'Equipa — Título');

-- index — Projetos
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'projects_subtitle', NULL, 'text', 'Projetos — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'projects_title', NULL, 'text', 'Projetos — Título');

-- index — Preços
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'pricing_subtitle', NULL, 'text', 'Preços — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'pricing_title', NULL, 'text', 'Preços — Título');

-- index — Testemunhos
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'testimonial_subtitle', NULL, 'text', 'Testemunhos — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'testimonial_title', NULL, 'text', 'Testemunhos — Título');

-- index — Blog
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'blog_subtitle', NULL, 'text', 'Blog — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'blog_title', NULL, 'text', 'Blog — Título');

-- index — Contacto
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'contact_title', NULL, 'text', 'Contacto — Título');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index', 'contact_description', NULL, 'textarea', 'Contacto — Descrição');

-- index-2 — Hero
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'hero_title', NULL, 'text', 'Hero — Título');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'hero_description', NULL, 'textarea', 'Hero — Descrição');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'hero_btn_text', NULL, 'text', 'Hero — Texto do Botão');

-- index-2 — Sobre
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'about_subtitle', NULL, 'text', 'Sobre — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'about_title', NULL, 'text', 'Sobre — Título');

-- index-2 — Serviços
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'services_subtitle', NULL, 'text', 'Serviços — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'services_title', NULL, 'text', 'Serviços — Título');

-- index-2 — Projetos
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'projects_subtitle', NULL, 'text', 'Projetos — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'projects_title', NULL, 'text', 'Projetos — Título');

-- index-2 — Processo
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'process_subtitle', NULL, 'text', 'Processo — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'process_title', NULL, 'text', 'Processo — Título');

-- index-2 — Equipa
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'team_subtitle', NULL, 'text', 'Equipa — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'team_title', NULL, 'text', 'Equipa — Título');

-- index-2 — FAQ
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'faq_subtitle', NULL, 'text', 'FAQ — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'faq_title', NULL, 'text', 'FAQ — Título');

-- index-2 — Testemunhos
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'testimonial_subtitle', NULL, 'text', 'Testemunhos — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'testimonial_title', NULL, 'text', 'Testemunhos — Título');

-- index-2 — Blog
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'blog_subtitle', NULL, 'text', 'Blog — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-2', 'blog_title', NULL, 'text', 'Blog — Título');

-- index-3 — Hero
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-3', 'hero_title', NULL, 'text', 'Hero — Título');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-3', 'hero_description', NULL, 'textarea', 'Hero — Descrição');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-3', 'hero_btn_text', NULL, 'text', 'Hero — Texto do Botão');

-- index-3 — Secções
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-3', 'about_subtitle', NULL, 'text', 'Sobre — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-3', 'about_title', NULL, 'text', 'Sobre — Título');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-3', 'services_subtitle', NULL, 'text', 'Serviços — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-3', 'services_title', NULL, 'text', 'Serviços — Título');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-3', 'team_subtitle', NULL, 'text', 'Equipa — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-3', 'team_title', NULL, 'text', 'Equipa — Título');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-3', 'projects_subtitle', NULL, 'text', 'Projetos — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-3', 'projects_title', NULL, 'text', 'Projetos — Título');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-3', 'blog_subtitle', NULL, 'text', 'Blog — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-3', 'blog_title', NULL, 'text', 'Blog — Título');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('index-3', 'cta_title', NULL, 'text', 'CTA — Título');

-- about
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('about', 'page_title', NULL, 'text', 'Título da Página');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('about', 'about_subtitle', NULL, 'text', 'Sobre — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('about', 'about_title', NULL, 'text', 'Sobre — Título');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('about', 'about_description', NULL, 'textarea', 'Sobre — Descrição');

-- services
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('services', 'page_title', NULL, 'text', 'Título da Página');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('services', 'services_subtitle', NULL, 'text', 'Serviços — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('services', 'services_title', NULL, 'text', 'Serviços — Título');

-- service-details
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('service-details', 'page_title', NULL, 'text', 'Título da Página');

-- portfolios
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('portfolios', 'page_title', NULL, 'text', 'Título da Página');

-- portfolio-details
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('portfolio-details', 'page_title', NULL, 'text', 'Título da Página');

-- blog-standard
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('blog-standard', 'page_title', NULL, 'text', 'Título da Página');

-- blog-details
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('blog-details', 'page_title', NULL, 'text', 'Título da Página');

-- team
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('team', 'page_title', NULL, 'text', 'Título da Página');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('team', 'team_subtitle', NULL, 'text', 'Equipa — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('team', 'team_title', NULL, 'text', 'Equipa — Título');

-- pricing
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('pricing', 'page_title', NULL, 'text', 'Título da Página');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('pricing', 'pricing_subtitle', NULL, 'text', 'Preços — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('pricing', 'pricing_title', NULL, 'text', 'Preços — Título');

-- faq
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('faq', 'page_title', NULL, 'text', 'Título da Página');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('faq', 'faq_subtitle', NULL, 'text', 'FAQ — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('faq', 'faq_title', NULL, 'text', 'FAQ — Título');

-- contact
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('contact', 'page_title', NULL, 'text', 'Título da Página');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('contact', 'contact_subtitle', NULL, 'text', 'Contacto — Subtítulo');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('contact', 'contact_title', NULL, 'text', 'Contacto — Título');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('contact', 'contact_address', NULL, 'text', 'Morada');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('contact', 'contact_phone', NULL, 'text', 'Telefone');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('contact', 'contact_email', NULL, 'text', 'Email');

-- error
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('error', 'page_title', NULL, 'text', 'Título da Página');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('error', 'error_title', NULL, 'text', 'Erro — Título');
INSERT IGNORE INTO content (page, content_key, content_value, content_type, label) VALUES ('error', 'error_description', NULL, 'textarea', 'Erro — Descrição');
