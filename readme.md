<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## How to run

- cd into your project and run "composer install".
- Create database "mycourier" and update .env file with your username and password.
- After that run "php artisan migrate" to migrate database tables
- Then run "php artisan serve"
- Go to localhost:8000

1. On your rest client make a post request to the url http://localhost:8000/api/user/register to register. You will supply a username, email and password in your form.

2. Make a post request to http://localhost:8000/api/login to login with your email and password. After login you will receive an access token which will be used for subsequent requests.

3. To make subsequent requests to the endpoints on your rest client, go to the url. Then under headers section, you will add the authorization.

eg 
Key: Authorization    
Value: Bearer "your_access_token"

## End Points

show all courier items -(get)  http://localhost:8000/api/items

create new courier item - (post) http://localhost:8000/api/items. You will need to supply the name, description, weight, distance in your form.

update courier item information -(put) http://localhost:8000/api/items/1

show single courier item (get) http://localhost:8000/api/items/1

delete courier item (delete) http://localhost:8000/items/api/items/1


## Hosted Version

url: https://agile-stream-92374.herokuapp.com

1. On your rest client, make a post request to the url https://agile-stream-92374.herokuapp.com/api/user/register to register.You will supply a username, email and password in your form.
2. Make a post request to https://agile-stream-92374.herokuapp.com/api/login to login with your email and password. After login you will receive an access token which will be used for subsequent requests.
3. To make subsequent requests to the endpoints on your rest client, go to the url. Then under headers section, you will add the authorization.

eg  Key: Authorization   
    Value: Bearer "your_access_token"

## End Points

- show all courier items -(get)  https://agile-stream-92374.herokuapp.com/api/items
- create new courier item - (post) https://agile-stream-92374.herokuapp.com/api/items. You will need to supply the name, description, weight, distance in your form.
- update courier item information -(put) https://agile-stream-92374.herokuapp.com/api/items/1
- show single courier item (get) https://agile-stream-92374.herokuapp.com/api/items/1
- delete courier item (delete) https://agile-stream-92374.herokuapp.com/api/items/1
