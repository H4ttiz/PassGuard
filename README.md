# 🔐 SafeVault

Gerenciador de senhas desenvolvido para fins de estudo utilizando **PHP, JavaScript, Bootstrap e MySQL**.

O projeto simula um **cofre digital de credenciais**, permitindo que usuários cadastrem, editem, visualizem e excluam senhas com segurança, aplicando boas práticas de organização de código, arquitetura MVC e proteção de dados.

---

## 🚀 Tecnologias

- PHP
- JavaScript
- Bootstrap
- MySQL
- PDO
- HTML5 + CSS3

---

## 🎯 Objetivos

Este projeto foi criado para praticar:

- CRUD completo com PHP + MySQL
- Estruturação profissional de pastas
- Separação de responsabilidades (MVC)
- Autenticação de usuários
- Criptografia e hash de senhas
- Boas práticas de segurança
- Organização de código para portfólio

---

## 📂 Estrutura do projeto

```bash
safevault/
│
├── public/        # páginas acessadas pelo navegador (views)
├── assets/        # css, js, imagens
├── app/
│   ├── controllers
│   ├── models
│   ├── services
│   └── helpers
├── config/        # conexão com banco e configurações
├── storage/       # logs e backups
│
├── .env           # variáveis sensíveis (não versionado)
├── .env.example   # modelo de configuração
├── .gitignore
└── README.md
```

---

## ⚙️ Configuração

### 1. Clone o repositório

```bash
git clone https://github.com/H4ttiz/PassGuard.git
```

### 2. Crie o arquivo `.env`

```bash
cp .env.example .env
```

### 3. Configure o banco de dados no `.env`

```env
DB_HOST=
DB_NAME=
DB_USER=
DB_PASS=
APP_KEY=
```

### 4. Execute no servidor local

Você pode usar:

- WampServer
- XAMPP
- Laragon

Ou o servidor embutido do PHP:

```bash
php -S localhost:8000
```

---

## ✨ Funcionalidades

### 🔐 Autenticação
- Cadastro de usuário
- Login
- Logout
- Sessões

### 🔑 Senhas
- Criar credenciais
- Listar senhas
- Editar
- Excluir
- Criptografia dos dados

### 🎨 Interface
- Layout com Bootstrap
- Responsivo
- Validação de formulários

---

## 📚 Aprendizados aplicados

- PDO + Prepared Statements
- Organização MVC
- Estrutura modular de pastas
- Versionamento com Git
- Uso de `.env` para segurança
- Separação entre frontend e backend

---

## 🚧 Status

**Em desenvolvimento**

Projeto voltado para aprendizado e portfólio.

---

## 👨‍💻 Autor

Leonardo Bizerra  
GitHub: https://github.com/H4ttiz

---

## 🔒 Aviso

Este projeto é educacional.  
Não utilize em produção sem implementar camadas extras de segurança.



