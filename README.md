# api-pedidos-doc88
API RestFull para CRUD de Pedidos

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
