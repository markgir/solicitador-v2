# Solicitador v2

Website profissional para escritório de solicitadoria, com painel de administração (backoffice) para gestão de conteúdos e secções.

---

## Funcionalidades

- **Website público** com múltiplas páginas: Início (3 variantes), Sobre Nós, Serviços, Portfólio, Blog, Equipa, Preços, FAQ, Contacto
- **Painel de administração** (`/admin/`) protegido por autenticação
  - Edição de conteúdos de texto de todas as páginas
  - Ativar/desativar secções individualmente por página (via toggle AJAX)
  - Dashboard com estatísticas do site
- **Base de dados SQLite** — sem necessidade de MySQL ou outro servidor de base de dados
- **Design responsivo** com Bootstrap 5, animações GSAP, carrosséis Swiper e mapas Leaflet
- **Segurança**: passwords com hash bcrypt, proteção CSRF, prepared statements SQL, escape XSS

---

## Requisitos

- **PHP** >= 7.4
- **Servidor web** Apache (com `mod_rewrite`) ou Nginx
- **Extensões PHP necessárias:**
  - `sqlite3` — acesso à base de dados SQLite
  - `mbstring` — manipulação de strings multibyte
  - `session` — gestão de sessões (autenticação admin)
  - `json` — tratamento de dados JSON (AJAX)

> A maioria destas extensões vem ativada por defeito no PHP.

---

## Instalação

### 1. Clonar o repositório

```bash
git clone https://github.com/markgir/solicitador-v2.git
cd solicitador-v2
```

### 2. Inicializar a base de dados

```bash
php database/init.php
```

Este comando cria o ficheiro `database/backoffice.db` com as tabelas e dados iniciais.

### 3. Configurar o servidor web

Apontar o document root do servidor para a pasta raiz do projeto.

**Exemplo com PHP built-in server (desenvolvimento):**

```bash
php -S localhost:8000
```

**Exemplo Apache (virtualhost):**

```apache
<VirtualHost *:80>
    DocumentRoot /caminho/para/solicitador-v2
    <Directory /caminho/para/solicitador-v2>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

### 4. Aceder ao site

- **Website:** `http://localhost:8000`
- **Painel admin:** `http://localhost:8000/admin/`
- **Credenciais padrão:** utilizador `admin`, password `admin123`

> ⚠️ **Altere a password após o primeiro login.**

---

## Estrutura do Projeto

```
solicitador-v2/
├── index.php, index-2.php, index-3.php   # Páginas iniciais (3 variantes)
├── about.php                              # Sobre Nós
├── services.php, service-details.php      # Serviços
├── portfolios.php, portfolio-details.php  # Portfólio
├── blog.php, blog-standard.php, blog-details.php  # Blog
├── team.php                               # Equipa
├── pricing.php                            # Preços
├── faq.php                                # FAQ
├── contact.php                            # Contacto
├── error.php                              # Página 404
├── coming-soon.php                        # Em Breve
├── includes/
│   ├── config.php        # Constantes de configuração
│   ├── db.php            # Ligação à base de dados SQLite
│   └── functions.php     # Funções auxiliares (conteúdos e secções)
├── database/
│   └── init.php          # Script de inicialização da base de dados
├── admin/
│   ├── login.php         # Autenticação
│   ├── index.php         # Dashboard
│   ├── content.php       # Editor de conteúdos
│   ├── sections.php      # Gestão de secções
│   ├── logout.php        # Terminar sessão
│   ├── ajax/             # Endpoints AJAX
│   ├── includes/         # Header, footer, autenticação
│   └── assets/           # CSS do painel admin
└── assets/
    ├── css/              # Folhas de estilo (Bootstrap, main.css, etc.)
    ├── js/               # Scripts (jQuery, GSAP, Swiper, Leaflet, etc.)
    ├── images/           # Imagens do site
    ├── fonts/            # Fontes de ícones personalizados
    └── mail/             # Handler do formulário de contacto
```

---

## Licença

Projeto privado — todos os direitos reservados.