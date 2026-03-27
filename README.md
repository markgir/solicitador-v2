# Solicitador v2

Website profissional para escritório de solicitadoria, com painel de administração (backoffice) para gestão de conteúdos e secções.

---

## Funcionalidades

- **Website público** com múltiplas páginas: Início (3 variantes), Sobre Nós, Serviços, Portfólio, Blog, Equipa, Preços, FAQ, Contacto
- **Painel de administração** (`/admin/`) protegido por autenticação
  - Edição de conteúdos de texto de todas as páginas
  - Ativar/desativar secções individualmente por página (via toggle AJAX)
  - Dashboard com estatísticas do site
- **Base de dados MySQL** — compatível com qualquer alojamento partilhado
- **Design responsivo** com Bootstrap 5, animações GSAP, carrosséis Swiper e mapas Leaflet
- **Segurança**: passwords com hash bcrypt, proteção CSRF, prepared statements SQL, escape XSS

---

## Requisitos

- **PHP** >= 7.4
- **MySQL** >= 5.7 (ou MariaDB >= 10.2)
- **Servidor web** Apache (com `mod_rewrite`) ou Nginx
- **Extensões PHP necessárias:**
  - `pdo` e `pdo_mysql` — acesso à base de dados MySQL
  - `mbstring` — manipulação de strings multibyte
  - `session` — gestão de sessões (autenticação admin)
  - `json` — tratamento de dados JSON (AJAX)

> A maioria destas extensões vem ativada por defeito no PHP. Todos os alojamentos partilhados incluem MySQL e PDO.

---

## Instalação

### 1. Clonar o repositório

```bash
git clone https://github.com/markgir/solicitador-v2.git
cd solicitador-v2
```

### 2. Criar a base de dados MySQL

Crie uma base de dados MySQL e importe o ficheiro `database/backoffice.sql`:

```bash
mysql -u root -p nome_da_base_de_dados < database/backoffice.sql
```

### 3. Configurar a ligação à base de dados

Edite o ficheiro `includes/config.php` com os dados da sua base de dados:

```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'nome_da_base_de_dados');
define('DB_USER', 'utilizador_mysql');
define('DB_PASS', 'password_mysql');
```

### 4. Configurar o servidor web

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
│   ├── config.php        # Configuração da base de dados MySQL
│   ├── db.php            # Ligação à base de dados MySQL (PDO)
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

### 2. Criar a base de dados MySQL

1. No painel de controlo, aceda a **Bases de Dados MySQL** (MySQL Databases).
2. Crie uma **nova base de dados** (ex.: `solicitador`).
3. Crie um **novo utilizador** com uma password segura.
4. **Associe o utilizador à base de dados** com **todos os privilégios**.

> 💡 **Nota:** No cPanel, o nome da base de dados e do utilizador ficam com um prefixo (ex.: `cpuser_solicitador`). Use o nome completo na configuração.

### 3. Importar a base de dados

1. No painel de controlo, aceda ao **phpMyAdmin**.
2. Selecione a base de dados que acabou de criar.
3. Clique no separador **Importar**.
4. Clique em **Escolher ficheiro** e selecione o ficheiro `database/backoffice.sql`.
5. Clique em **Executar** (Go).
6. Deverá ver a mensagem de sucesso — as tabelas e dados iniciais foram criados.

### 4. Configurar a ligação à base de dados

1. No **Gestor de Ficheiros**, navegue até `includes/config.php`.
2. Clique com o botão direito → **Editar** (Edit).
3. Preencha os dados da base de dados que criou no passo 2:

```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'cpuser_solicitador');   // nome completo da base de dados
define('DB_USER', 'cpuser_utilizador');    // nome completo do utilizador
define('DB_PASS', 'a_sua_password_segura');
```

4. Guarde o ficheiro.

### 5. Aceder ao painel de administração

- **URL:** `https://seudominio.pt/admin/`
- **Utilizador:** `admin`
- **Password:** `admin123`

> ⚠️ **Altere a password imediatamente após o primeiro login.**

### Requisitos do alojamento

- **PHP** >= 7.4 (a maioria dos alojamentos oferece PHP 8.x)
- **MySQL** >= 5.7 ou **MariaDB** >= 10.2 (incluído em todos os alojamentos)
- Extensões `pdo`, `pdo_mysql`, `mbstring`, `session` e `json` ativas (habitual por defeito)

> 💡 **Dica:** Pode verificar as extensões PHP ativas criando um ficheiro `info.php` com `<?php phpinfo(); ?>` e acedendo-o no browser. Apague-o depois de verificar.

---

## Ficheiro SQL da Base de Dados

O ficheiro `database/backoffice.sql` contém todo o esquema e dados iniciais da base de dados em formato MySQL. Pode ser utilizado para:

- **Importar via phpMyAdmin** — basta selecionar a base de dados e usar o separador "Importar"
- **Importar via terminal** (se tiver acesso SSH): `mysql -u utilizador -p nome_da_bd < database/backoffice.sql`
- **Recriar a base de dados** se necessário
- **Inspecionar o esquema** das tabelas e os dados iniciais

> Em alternativa, pode executar `php database/init.php` para criar as tabelas e popular os dados iniciais via PHP (requer que o ficheiro `includes/config.php` esteja configurado).

---

## Licença

Projeto privado — todos os direitos reservados.