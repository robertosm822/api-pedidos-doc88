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

## Rotas dos seviços criados:
``|        | POST      | api/v1/clientes                | clientes.store   | App\Http\Controllers\ClienteController@store   | api          |
|        | GET|HEAD  | api/v1/clientes                | clientes.index   | App\Http\Controllers\ClienteController@index   | api          |
|        | GET|HEAD  | api/v1/clientes/create         | clientes.create  | App\Http\Controllers\ClienteController@create  | api          |
|        | GET|HEAD  | api/v1/clientes/{cliente}      | clientes.show    | App\Http\Controllers\ClienteController@show    | api          |
|        | PUT|PATCH | api/v1/clientes/{cliente}      | clientes.update  | App\Http\Controllers\ClienteController@update  | api          |
|        | DELETE    | api/v1/clientes/{cliente}      | clientes.destroy | App\Http\Controllers\ClienteController@destroy | api          |
|        | GET|HEAD  | api/v1/clientes/{cliente}/edit | clientes.edit    | App\Http\Controllers\ClienteController@edit    | api          |
|        | GET|HEAD  | api/v1/pasteis                 | pasteis.index    | App\Http\Controllers\PastelController@index    | api          |
|        | POST      | api/v1/pasteis                 | pasteis.store    | App\Http\Controllers\PastelController@store    | api          |
|        | GET|HEAD  | api/v1/pasteis/create          | pasteis.create   | App\Http\Controllers\PastelController@create   | api          |
|        | DELETE    | api/v1/pasteis/{pastei}        | pasteis.destroy  | App\Http\Controllers\PastelController@destroy  | api          |
|        | GET|HEAD  | api/v1/pasteis/{pastei}        | pasteis.show     | App\Http\Controllers\PastelController@show     | api          |
|        | PUT|PATCH | api/v1/pasteis/{pastei}        | pasteis.update   | App\Http\Controllers\PastelController@update   | api          |
|        | GET|HEAD  | api/v1/pasteis/{pastei}/edit   | pasteis.edit     | App\Http\Controllers\PastelController@edit     | api          |
|        | GET|HEAD  | api/v1/pedidos                 | pedidos.index    | App\Http\Controllers\PedidoController@index    | api          |
|        | POST      | api/v1/pedidos                 | pedidos.store    | App\Http\Controllers\PedidoController@store    | api          |
|        | GET|HEAD  | api/v1/pedidos/create          | pedidos.create   | App\Http\Controllers\PedidoController@create   | api          |
|        | GET|HEAD  | api/v1/pedidos/{pedido}        | pedidos.show     | App\Http\Controllers\PedidoController@show     | api          |
|        | PUT|PATCH | api/v1/pedidos/{pedido}        | pedidos.update   | App\Http\Controllers\PedidoController@update   | api          |
|        | DELETE    | api/v1/pedidos/{pedido}        | pedidos.destroy  | App\Http\Controllers\PedidoController@destroy  | api          |
|        | GET|HEAD  | api/v1/pedidos/{pedido}/edit   | pedidos.edit     | App\Http\Controllers\PedidoController@edit     | api          |``


## Referências de recursos usados:
 - https://laravel.com/docs/5.5/installation
 - https://laravel.com/docs/5.5/eloquent
 - https://laravel.com/docs/5.5/migrations
 - https://laravel.com/docs/5.5/eloquent-relationships#one-to-many
 - https://laravel.com/docs/5.5/eloquent#soft-deleting
 - https://laravel.com/docs/5.5/seeding
 - https://github.com/fruitcake/laravel-cors