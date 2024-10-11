# Freelance Hours

**Freelance Hours** é uma aplicação web introdutória desenvolvida durante o curso de PHP da Rocketseat. A aplicação é desenvolvida em PHP com o framework Laravel, criada com o objetivo de gerenciar e acompanhar o tempo dedicado a projetos de freelancers. Este projeto utiliza a arquitetura MVC para organizar suas funcionalidades.

## 🚀 Tecnologias Utilizadas

- **PHP**: Linguagem de backend utilizada para desenvolver a lógica da aplicação.
- **Laravel**: Framework PHP utilizado para estruturar o projeto com a arquitetura MVC.
- **SQLite**: Banco de dados leve utilizado para agilizar o desenvolvimento da aplicação e os testes locais.
- **Livewire**: Ferramenta para criar interfaces dinâmicas e reativas no Laravel sem sair do PHP.
- **Migrations**: Ferramenta para gerenciamento de banco de dados e versionamento.
- **Factories e Seeders**: Utilizados para gerar dados falsos e popular o banco de dados para testes.

## 📋 Funcionalidades

- Registro de novas propostas para projetos cadastrados.
- Notificação de criação de projetos por email, utilizando smtp.
- Validação de dados dos formulários para garantir integridade.
- Interfaces dinâmicas e reativas desenvolvidas com Livewire.

## 🛠️ Como Instalar e Executar o Projeto

Siga os passos abaixo para rodar o projeto localmente.

1. Clone o repositório:

    ```bash
    git clone https://github.com/seuusuario/freelance-hours.git
    ```

2. Navegue até a pasta do projeto:

    ```bash
    cd freelance-hours
    ```

3. Instale as dependências do projeto:

    ```bash
    composer install
    ```

4. Crie o arquivo `.env`:

    ```bash
    cp .env.example .env
    ```

5. Gere a chave da aplicação:

    ```bash
    php artisan key:generate
    ```

6. Configure o banco de dados (SQLite):

    No arquivo `.env`, defina o caminho para o banco de dados SQLite:

    ```
    DB_CONNECTION=sqlite
    DB_DATABASE=/caminho/para/seu/database.sqlite
    ```

    Crie o arquivo SQLite:

    ```bash
    touch database/database.sqlite
    ```

7. Execute as migrations e seeders para popular o banco de dados:

    ```bash
    php artisan migrate --seed
    ```

8. Inicie o servidor local:

    ```bash
    php artisan serve
    ```

9. Acesse a aplicação no navegador:

    ```
    http://localhost:8000
    ```

<img width="1420" alt="Captura de Tela 2024-10-11 às 16 32 23" src="https://github.com/user-attachments/assets/453e51cb-555a-4549-a1e9-e3fe439ff1bb">



