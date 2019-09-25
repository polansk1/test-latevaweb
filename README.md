# Project Setup

## Dependencias

Para instalar las dependencias del proyecto ejecutamos los siguientes comandos:

```
$ npm install
$ composer install
```

## Configuraciones

Se debe copiar y renombrar el siguiente archivo:

> /.env.example -> /.env


Generamos una nueva "APP_KEY" para el proyecto mediante el siguiente comando:

```
$ php artisan key:generate
```

Adaptamos las constantes del proyecto segun nuestras necesidades:

* /.env


## Base de datos

Se debe crear una base de datos nueva e importar el esquema y los datos básicos 
mediante el siguiente comando:

```
$ php artisan migrate --seed
```


## Usuarios

Al importar el esquema y los datos básicos, se habrán generado los siguientes 
usuarios:

>* email: "[LOCAL_USER_EMAIL]" | password: "[LOCAL_USER_PASSWORD]"
>* email: "user@test.com" | password: "secret123"

## Lanzar aplicación

Para ejecutar la aplicación en un servidor local introduce el siguiente comando:

```
$ php artisan serve

```
