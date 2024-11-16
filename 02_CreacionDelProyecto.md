# Creación del Proyecto

## Paso 1: Crear el Proyecto con Composer

Para iniciar el proyecto, utilizamos Composer para crear una nueva aplicación. Ejecuta el siguiente comando en tu terminal:

```bash
composer create-project --prefer-dist laravel/laravel tp-mobile-crui
```

## Paso 2: Crear base de datos y configurar el entorno

Utilizando Xampp, a traves de la url [localhost/phpmyadmin](localhost/phpmyadmin) creamos una base de datos llamada "equipos_esports".

Configuramos la base de datos en el archivo .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=equipos_esports
DB_USERNAME=root
DB_PASSWORD=
```

## Paso 3: Hacer las migraciones y ejecutarlas

```bash
php artisan make:migration create_equipos_table
php artisan make:migration create_juegos_table
```

Editar las migraciones en la carpeta /database/migrations con los campos necesarios según la base de datos que planeamos armar.
Ejecutar las migraciones.

```bash
php artisan migrate
```

## Paso 4: Crear los modelos y establecer las relaciones

```bash
php artisan make:model Equipo
php artisan make:model Juego
```

En la carpeta /app/Models/ editar los modelos, estableciendo las relaciones.

## Paso 5: Crear los controladores

Crear los controladores según las funciones que va a cumplir nuestra página:
