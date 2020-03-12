# api-pedidos-doc88
API RestFull para CRUD de Pedidos
Versão do Laravel usada 5.5 (para manter compatibilidade com servidor HostGator).

## Requisitos de servidores para Laravel 5.5:
    
    - PHP >= 7.0.0
    - OpenSSL PHP Extension
    - PDO PHP Extension
    - Mbstring PHP Extension
    - Tokenizer PHP Extension
    - XML PHP Extension

## Instalar as dependencias usando o COMPOSER:
 
    - composer install

## Configurar o banco de dados no aquivo da raiz `.env`

        `DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=api_pedidos
        DB_USERNAME=your_user
        DB_PASSWORD=your_password`

## Rodar as Migrations das tabelas:
 
    - php artisan migrate 

## Pendente criar o servico de Seeder para deixar populado os exemplos:
 
 - https://stackoverflow.com/questions/34382043/laravel-how-do-i-insert-the-first-user-in-the-database