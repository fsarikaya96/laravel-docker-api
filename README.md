# Laravel Docker

### Run application

```
docker-compose up -d --build
```

### Close application

```
docker-compose kill
```

### Key generate

```
docker-compose exec app php artisan key:generate
```

### Composer install

```
docker exec app composer install
```
### Create vendor File
```
docker-compose exec app composer update --no-scripts
```
### Migrate

```
docker exec app php artisan migrate
```
