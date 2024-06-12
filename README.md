# Nikah Project Laravel

<a href="https://github.com/SorwarHussain/nikah-vue">Frontend Repositories</a>

## Overview
This Nikah project is a web application designed to help users create, update, and manage profiles for matrimonial purposes. It includes features such as user authentication, profile management, search functionality, and an admin dashboard for managing users and donations.

## Features Implementations:

### Authentication System
- Users can register, log in, and log out.
- Verification process for new users to confirm their identity.
- Only authenticated and verified users have full access to features.

### Profile Management
- Create, update, and view profiles.
- Admin functionalities to approve and edit profiles.

### Search and Viewing Profiles
- Implement search functionality.
- Display all approved profiles to users.

### Contact Information
- Authenticated and verified users can access contact information of other profiles.

### Wishlist
- Authenticated and verified users can add profiles to their wishlist.
- Users can also remove profiles from their wishlist.

### Communication and Support
- Users can contact the team through a contact-us page.

### Donations
- Users can donate through a dedicated donation page.

### Admin Dashboard
- Admin functionalities to view users, donation requests, and all profiles.

### User Dashboard
- Only verified users can access their personal dashboard for managing profiles and other settings.
- 
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

