# Laravel Api Controller

# Install

**1. Clone Project**

```
  $ https://github.com/fsarikaya96/laravel-docker-api.git
```

**2. Install**

```
  $ docker-compose up -d
  $ docker exec app composer install | composer update --no-scripts
  $ docker exec app php artisan key:generate
  $ docker exec app php artisan migrate | php artisan db:seed
  $ docker exec app php artisan passport:install
```

# CURL

**Get Token**

```
curl -X POST \
  http://localhost:8080/api/auth/login \
  -H 'Accept: application/json' \
  -H 'Content-Type: application/x-www-form-urlencoded' \
  -d 'email=admin@admin.com&password=admin'
  -d '{
    "token" : "{_token}"
    }'
```

**Forgot Password**

```
curl -X POST \
   http://localhost:8080/api/auth/forgot-password \
  -H 'Content-Type: application/x-www-form-urlencoded' \
  -d 'email=admin@admin.com'
  -d '{
        "success": true,
        "message": "Check your email box."
    }'

```

**Reset Password**

```
curl -X POST \
   http://localhost:8080/api/auth/reset-password \
  -H 'Accept: application/json' \
  -H 'Content-Type: application/x-www-form-urlencoded' \
  -H 'Authorization: Bearer {__TOKEN_CODE__}' \
  -d 'token={__EMAIL_TOKEN_CODE__}' \
  -d 'email=admin@admin.com' \
  -d 'password=12345678' \
  -d 'password_confirmation=12345678' \
  -d '{
        "success": true,
        "message": "The password has been successfully changed."
    }'
```

**Get All Products**

```
curl -X GET \
  http://localhost:8080/api/v2/products \
  -H 'Accept: application/json' \
  -H 'Authorization: Bearer {__TOKEN_CODE__}' \
  -H 'Content-Type: application/x-www-form-urlencoded' \
```

**Get Product By ID**

```
curl -X GET \
  http://localhost:8080/api/v2/products/10 \
  -H 'Accept: application/json' \
  -H 'Authorization: Bearer {__TOKEN_CODE__}' \
  -d '{
        "id": 10,
        "name": "Eum sunt dolore aut id possimus qui.",
        "price": "124",
        "is_active": 0,
    }'
```

**Get All Categories**

```
curl -X GET \
  http://localhost:8080/api/v2/categories \
  -H 'Accept: application/json' \
  -H 'Authorization: Bearer {__TOKEN_CODE__}' \
```

**Get Category By ID**

```
curl -X GET \
  http://localhost:8080/api/v2/categories/1 \
  -H 'Accept: application/json' \
  -H 'Authorization: Bearer {__TOKEN_CODE__}' \
  -d '{
        "id": 1,
        "name": "Electronic",
        "sub_category": null,
        "slug": "electronic",
    }'
```

# Using

```
  Domain Driven Design
  Dependency Injection
  Logger
  Custom ResponseResult
```
