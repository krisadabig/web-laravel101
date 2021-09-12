## 1. Clone this repo

```sh
git clone https://github.com/krisadabig/web-laravel101.git
cd web-laravel101
```

## 2. Install package

> composer and laravel 8 require

```sh
composer install
```

## 3. Create .env file

```sh
cp .env.example .env
```

## 4. Edit .env file with text editer

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= {your database name }
DB_USERNAME= {your database username }
DB_PASSWORD= {your database password }
```

## 5. Generate app key

```sh
php artisan key:generate
```

# 5.5 Create database with same name as DB_DATABASE in .env

## 6. Migrate table and seed record

```sh
php artisan migrate --seed
```

## 7. Complie

```sh
php artisan serve
```