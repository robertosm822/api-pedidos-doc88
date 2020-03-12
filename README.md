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

## Renomear arquivos: 
 - 'package.json.example' para 'package.json'
 - 'composer.json.example' para 'composer.json'

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

## Gerar os Seeder de cadastros de exemplo:
  - php artisan db:seed --class=ClientesTableSeeder
  - php artisan db:seed --class=PastelsTableSeeder
  - php artisan db:seed --class=PedidosTableSeeder

## Inicializar (opcional) o server:
  - php artisan serve



## Referências de recursos usados:
 - https://laravel.com/docs/5.5/installation
 - https://laravel.com/docs/5.5/eloquent
 - https://laravel.com/docs/5.5/migrations
 - https://laravel.com/docs/5.5/eloquent-relationships#one-to-many
 - https://laravel.com/docs/5.5/eloquent#soft-deleting
 - https://laravel.com/docs/5.5/seeding
 - https://github.com/fruitcake/laravel-cors