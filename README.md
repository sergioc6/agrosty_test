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

Ingresar al container de la App
```sh
$ docker-compose exec php sh
```

Instalar dependencias
```sh
/var/www/html # composer install
```

Ejecutar migraciones y seeders
```sh
/var/www/html # php artisan migrate:fresh --seed
```

Permisos
```sh
/var/www/html # chmod -R 777 storage/
```

## Links

- [MailApp](http://localhost/mails)
- [MailHog](http://localhost:8025/)
