# First Laravel Blog

First clone code to your desctop:
```git
git clone https://github.com/AliiAhmadi/FirstLaravelBlog.git
```

now:

```command
cd FirstLaravelBlog
```
```command
composer install
```
```laravel
php artisan key:generate
```
```command
cp .env.example .env
```
now edit database configs in .env file and save it. after that run below commands:

```command
php artisan migrate
```

```command
php artisan serve
```

see blog in your localhost on port 8000

goodluck !
