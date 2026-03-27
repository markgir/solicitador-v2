# Relatório de Melhorias — Backoffice Solicitador v2

**Data:** 27 de Março de 2026  
**Âmbito:** Melhoria do design, correção de erros e profissionalização do backoffice

---

## Resumo Executivo

Foram realizadas melhorias significativas no backoffice do projeto **Solicitador v2**, focando em três eixos: **correção de bugs**, **melhoria do design visual** e **profissionalização da interface**. O template base do frontend foi mantido intacto — todas as alterações foram exclusivamente no painel de administração (`/admin/`).

---

## 🐛 Erros Corrigidos

### 1. Bug no Seed da Base de Dados (`database/init.php`)
- **Problema:** Na linha 354, a coluna `label` da tabela `content` estava a ser preenchida com `$ck[3]` (valor padrão/default value) em vez de `$ck[2]` (label real). Isto fazia com que todos os labels dos conteúdos no backoffice aparecessem como valores padrão (ex: "Rovix" em vez de "Nome do Site").
- **Correção:** Alterado de `$ck[3]` para `$ck[2]`.
- **Impacto:** Os labels na página de edição de conteúdos agora mostram os nomes corretos dos campos.

### 2. Falta de Validação de Página em `sections.php`
- **Problema:** A página `content.php` validava o parâmetro `$selectedPage` contra a lista de páginas permitidas, mas `sections.php` não fazia esta validação, permitindo potenciais injeções de valores inválidos.
- **Correção:** Adicionada a mesma validação `in_array()` existente em `content.php`.

### 3. Validação de ID em `content.php` (POST)
- **Problema:** No loop de processamento POST, IDs extraídos de `content_` podiam incluir o campo `csrf_token` (que também começa com `content_` se o nome fosse manipulado). Adicionada verificação `if ($id <= 0) continue;`.
- **Correção:** Adicionada verificação para ignorar IDs inválidos.

### 4. Erro silencioso em `sections.php` (catch do fetch)
- **Problema:** No `catch` do JavaScript, era usado `alert()` para mostrar erros — inconsistente com o resto da UI que usa toasts.
- **Correção:** Substituído `alert()` por toast consistente com o padrão da aplicação.

---

## 🎨 Melhorias de Design

### Antes e Depois — Visão Geral

| Aspecto | Antes | Depois |
|---------|-------|--------|
| **Tipografia** | Font padrão do Bootstrap (system) | Inter (Google Fonts) — mais limpa e profissional |
| **Paleta de cores** | Cores Bootstrap padrão (primary, success, warning, info) | Paleta personalizada coesa (azul #2563eb, tons slate) |
| **Navbar** | `bg-dark` genérica, sem estado ativo | Navbar personalizada com indicador de página ativa |
| **Cards do Dashboard** | Cards Bootstrap coloridos simples | Cards com ícones subtis, cores suaves, valores destacados |
| **Cards de páginas** | Hover básico | Bordas refinadas, sombras subtis, transições suaves |
| **Tabelas** | Estilo Bootstrap padrão | Headers uppercase, espaçamento otimizado, tipografia refinada |
| **Formulários** | Estilo Bootstrap padrão | Bordas mais suaves, focus azul consistente, border-radius 8px |
| **Footer** | `bg-light` básico | Footer limpo branco com borda superior |
| **Login** | Fundo `#343a40` com emoji 🔒 | Gradiente profissional, ícone SVG, texto de ajuda |

---

### Detalhes das Melhorias por Ficheiro

#### `admin/assets/admin.css` — Redesign completo
- **Nova paleta de cores** baseada em variáveis CSS (`:root`) para consistência
- **Stat cards** no dashboard com layout horizontal (ícone + valor + label)
- **Ícones subtis** com fundos coloridos suaves em vez de cards totalmente coloridos
- **Toggle switches** mais proporcionais (2.8em × 1.4em)
- **Código (`<code>`)** com estilo visual limpo
- **Responsividade** melhorada para mobile

#### `admin/includes/header.php` — Navegação melhorada
- **Estado ativo** na nav: a página atual é destacada com fundo azul
- **Ícones atualizados** (bi-layout-text-sidebar para secções, bi-grid-3x3-gap-fill para brand)
- **Classe `navbar-admin`** separada para não conflitar com Bootstrap
- **Google Fonts (Inter)** adicionado via preconnect para performance

#### `admin/includes/footer.php` — Footer profissional
- **Classe `admin-footer`** dedicada em vez de `bg-light`
- **Nome do site dinâmico** via constante `SITE_NAME`
- **Wrapper `admin-content`** em vez de `container-fluid` para controlo de max-width

#### `admin/login.php` — Página de login redesenhada
- **Gradiente de fundo** profissional (dark blue)
- **Ícone de marca** em vez de emoji 🔒
- **Subtítulo de ajuda** ("Introduza as suas credenciais para aceder")
- **Placeholders** nos campos para orientar o utilizador
- **Ícone no botão** de login
- **Copyright** subtil no fundo da página

#### `admin/index.php` — Dashboard redesenhado
- **Page header** com título e subtítulo descritivo
- **Stat cards** com layout ícone + valor + label (mais legível)
- **Grid responsiva** melhorada (`col-sm-6 col-xl-3` com `g-3` gaps)
- **Secção de páginas** com heading consistente

#### `admin/sections.php` — Tabela de secções melhorada
- **Breadcrumbs** para contexto de navegação
- **Descrição** da página abaixo do título
- **Badge** com contagem de secções no card header
- **Seletor de página** simplificado (removido o `(nome_ficheiro)` redundante)
- **Alertas com ícones** para consistência visual

#### `admin/content.php` — Editor de conteúdos melhorado
- **Breadcrumbs** para contexto de navegação
- **Descrição** clara da funcionalidade
- **Seletor simplificado** (sem nome de ficheiro redundante)
- **Botão "Guardar"** com ícone `bi-check-lg` (mais limpo)
- **Card footer** com fundo subtil

---

## 🔧 Melhorias de Profissionalismo & UX

1. **Consistência visual**: Todos os componentes seguem a mesma paleta de cores e espaçamento
2. **Breadcrumbs**: Adicionados nas páginas de secções e conteúdos para orientação
3. **Estados ativos na navegação**: O utilizador sabe sempre em que página se encontra
4. **Feedback visual**: Toasts consistentes em vez de mistura de alert() e toasts
5. **Tipografia hierárquica**: Títulos, subtítulos, labels e texto com tamanhos e pesos bem definidos
6. **Microinterações**: Hover states suaves em cards e links
7. **Espaçamento consistente**: Gap uniforme entre elementos (g-3 para grids)
8. **Minimalismo**: Removida informação redundante (nome do ficheiro no seletor de páginas)

---

## 📁 Ficheiros Alterados

| Ficheiro | Tipo de Alteração |
|----------|-------------------|
| `admin/assets/admin.css` | Redesign completo |
| `admin/includes/header.php` | Navegação com estado ativo, Google Fonts |
| `admin/includes/footer.php` | Footer profissional, nome do site dinâmico |
| `admin/login.php` | Redesign completo da página de login |
| `admin/index.php` | Dashboard redesenhado com stat cards |
| `admin/sections.php` | Breadcrumbs, validação, toast melhorado |
| `admin/content.php` | Breadcrumbs, validação melhorada |
| `database/init.php` | Correção do bug no seed de labels |

---

## 📋 Como Aplicar as Alterações

### Opção 1 — Aplicar via Pull Request (Recomendado)
Um Pull Request foi criado no repositório com todas as alterações. Basta:
1. Aceder ao PR no GitHub
2. Rever as alterações
3. Fazer merge para a branch `main`

### Opção 2 — Aplicar Manualmente
1. Fazer download ou checkout da branch `melhorias-backoffice`
2. Copiar os ficheiros alterados para o projeto
3. **Importante**: Se a base de dados já foi inicializada, executar o seguinte SQL para corrigir os labels:
```sql
-- Corrigir labels que foram seed incorretamente
-- Verifique se os labels na tabela content correspondem aos nomes dos campos
-- e não aos valores padrão. Se necessário, re-execute o init.php após limpar a tabela:
TRUNCATE TABLE content;
-- Depois re-executar: php database/init.php
```

### Opção 3 — Reset Completo
Se preferir recomeçar:
```bash
# Eliminar tabelas existentes (ATENÇÃO: perde dados!)
# Depois re-executar a inicialização
php database/init.php
```

---

## ⚠️ Notas Importantes

- O **template frontend** (Bootstrap, CSS, JS do site público) **não foi alterado**
- As alterações são **exclusivamente no backoffice** (`/admin/` e `/database/`)
- A funcionalidade existente foi **preservada** — apenas o visual e a robustez foram melhorados
- Recomenda-se **testar** num ambiente de staging antes de aplicar em produção
