# Agrosty Test MailApp

Requerimientos para configurar el proyecto:
  - git
  - docker
  - docker-compose


## Instalación

Clonar el repositorio
```sh
$ git clone https://github.com/sergioc6/agrosty_test.git
$ cd agrosty_test
```

Copiar el archivo de enviromente
```sh
$ cp .env.example .env
```

Levantar los servicios
```sh
$ docker-compose up -d
```

### Migraciones y Seeders

Ingresar al container de la App
```sh
$ docker-compose exec php sh
```

Ejecutar migraciones y seeders
```sh
/var/www/html # php artisan migrate:fresh --seed
```

## Links

- [MailApp](http://localhost/mails)
- [MailHog](http://localhost:8025/)
