# Nikah Project Laravel

<a href="https://github.com/SorwarHussain/nikah-vue">Frontend Repositories</a>

## How to install

```
mkdir nikah-laravel
```

```
cd nikah-laravel
```

```
git clone git@github.com:SorwarHussain/nikah-laravel.git api
```

```
cd api
```

```
composer install
```

```
cp .env
```

<p>Update env db connection. In my case I used PostgreSQL. </p>

```php
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

<p>Update env mail information</p>

```php
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```
<p>Run Server</p>

```php
php artisan serve
```

