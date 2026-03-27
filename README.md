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
│   ├── init.php          # Script de inicialização da base de dados
│   └── backoffice.sql    # Ficheiro SQL para importação direta
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

## Instalação em Alojamento Partilhado (cPanel / DirectAdmin)

Se utiliza um serviço de alojamento partilhado (ex.: cPanel, DirectAdmin, Plesk), siga estes passos:

### 1. Fazer upload dos ficheiros

1. Aceda ao **Gestor de Ficheiros** (File Manager) do painel de controlo.
2. Navegue até à pasta `public_html` (ou a pasta raiz do seu domínio/subdomínio).
3. Faça upload de **todos os ficheiros e pastas** do projeto para essa pasta.
   - Pode comprimir o projeto num ficheiro `.zip`, fazer upload e extrair diretamente no painel.
4. Certifique-se de que a estrutura fica assim:
   ```
   public_html/
   ├── index.php
   ├── admin/
   ├── assets/
   ├── database/
   ├── includes/
   └── ...
   ```

### 2. Criar a base de dados

A base de dados é **SQLite** (ficheiro local) — **não precisa de criar uma base de dados MySQL**.

**Opção A — Via Terminal / SSH** (recomendado):

1. Aceda ao **Terminal** no painel de controlo (cPanel → Terminal, ou ligue-se por SSH).
2. Navegue até à pasta do projeto e execute:
   ```bash
   cd ~/public_html
   php database/init.php
   ```
3. Deverá ver a mensagem: `Database initialized successfully`.

**Opção B — Importar o ficheiro SQL via terminal**:

1. Aceda ao **Terminal** no painel de controlo.
2. Execute:
   ```bash
   cd ~/public_html
   sqlite3 database/backoffice.db < database/backoffice.sql
   ```

**Opção C — Aceder à página do site** (automático):

Se o ficheiro `database/backoffice.db` não existir, basta visitar qualquer página do site no browser. A base de dados será criada automaticamente na primeira visita. Depois execute o init para popular os dados:

1. Visite `https://seudominio.pt` para criar o ficheiro da base de dados.
2. Execute via Terminal:
   ```bash
   cd ~/public_html
   php database/init.php
   ```

### 3. Verificar permissões

A pasta `database/` precisa de permissões de escrita para o PHP poder criar e modificar o ficheiro da base de dados:

```bash
chmod 755 database/
chmod 644 database/backoffice.db
```

> Em alguns alojamentos, as permissões já estão corretas por defeito. Se tiver problemas, tente `chmod 775 database/`.

### 4. Proteger a pasta da base de dados

Para evitar que o ficheiro `.db` seja descarregado diretamente pelo browser, crie um ficheiro `.htaccess` dentro da pasta `database/`:

```bash
echo "Deny from all" > database/.htaccess
```

Ou crie o ficheiro manualmente no Gestor de Ficheiros com o conteúdo:

```apache
Deny from all
```

### 5. Aceder ao painel de administração

- **URL:** `https://seudominio.pt/admin/`
- **Utilizador:** `admin`
- **Password:** `admin123`

> ⚠️ **Altere a password imediatamente após o primeiro login.**

### Requisitos do alojamento

- **PHP** >= 7.4 (a maioria dos alojamentos oferece PHP 8.x)
- Extensão **SQLite3** ativada (vem ativa por defeito na maioria dos alojamentos)
- Extensões `mbstring`, `session` e `json` ativas (habitual por defeito)

> 💡 **Dica:** Pode verificar as extensões PHP ativas criando um ficheiro `info.php` com `<?php phpinfo(); ?>` e acedendo-o no browser. Apague-o depois de verificar.

---

## Ficheiro SQL da Base de Dados

O ficheiro `database/backoffice.sql` contém todo o esquema e dados iniciais da base de dados em formato SQL puro. Pode ser utilizado para:

- **Importar a base de dados** sem executar PHP: `sqlite3 database/backoffice.db < database/backoffice.sql`
- **Recriar a base de dados** se o ficheiro `.db` for corrompido
- **Inspecionar o esquema** das tabelas e os dados iniciais

> Este ficheiro é equivalente a executar `php database/init.php` — ambos produzem o mesmo resultado.

---

## Licença

Projeto privado — todos os direitos reservados.