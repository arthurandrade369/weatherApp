# Weather App

Este é um projeto desenvolvido com [Laravel](https://laravel.com/), um framework PHP para aplicações web. O objetivo da aplicação é mostrar dados de previsão do tempo em certas localidades.

## Requisitos

- **PHP** >= 8.2.X
- **Composer** >= 2.7.X
- **Node.js** >= 20.X
- **NPM** >= 10.X

## Instalação

Siga os passos abaixo para configurar o ambiente local:

1. **Clone o repositório:**

    ```bash
    git clone https://github.com/usuario/nome-do-repositorio.git
    cd nome-do-repositorio

    Instale as dependências do Composer:
    ```

2. **Instale as dependências do Composer:**
    ```bash
    composer install
    ```

3. **Crie o arquivo .env baseado no .env.example:**

    ```bash
    cp .env.example .env
    ```

4. **Configure o arquivo .env:**

    Abra o arquivo .env e atualize as configurações de banco de dados e outras variáveis necessárias.

5. **Gere a chave da aplicação:**

    ```bash
    php artisan key:generate
    ```
6. **Instale as dependências do Node.js e compile os assets (Opcional):**

    ```bash
    npm install
    npm run dev
    ```

7. **Execute as migrações do banco de dados:**

    ```bash
    php artisan migrate
    ```

8. **Inicie o servidor local:**

    ```bash
        php artisan serve

        O servidor estará disponível em: http://localhost:8000.
    ```

## Estrutura do Projeto

- `app/` - Contém os arquivos principais da aplicação.
- `config/` - Arquivos de configuração.
- `routes/` - Define as rotas da aplicação.
- `resources/views/` - Templates Blade.
- `public/` - Arquivos estáticos, como CSS e JavaScript.

## Contribuições

Sinta-se à vontade para enviar pull requests ou abrir issues para melhorias e correções de bugs.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).