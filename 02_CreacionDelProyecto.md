# Creación del Proyecto

## Paso 1: Crear el Proyecto con Composer

Para iniciar el proyecto, utilizamos Composer para crear una nueva aplicación. Ejecuta el siguiente comando en tu terminal:

```bash
composer create-project --prefer-dist laravel/laravel tp-mobile-crui
```

## Paso 2: Crear base de datos y configurar el entorno

Utilizando Xampp, a traves de la url [localhost/phpmyadmin](localhost/phpmyadmin) creamos una base de datos llamada "gestion_notas".

Configuramos la base de datos en el archivo .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gestion_notas
DB_USERNAME=root
DB_PASSWORD=
```

## Paso 3: Hacer las migraciones y ejecutarlas

```bash
php artisan make:migration create_alumnos_table
php artisan make:migration create_materias_table
php artisan make:migration create_notas_table
```

Editar las migraciones con los campos necesarios.
Ejecutar las migraciones.

```bash
php artisan migrate
```

## Paso 4: Crear los modelos y establecer las relaciones

```bash
php artisan make:model Alumno
php artisan make:model Materia
php artisan make:model Nota
```

Editar los modelos, estableciendo las relaciones:

-   Un alumno puede tener muchas notas.
-   Una materia puede tener muchas notas.
-   Una nota pertenece a un alumno y a una materia.

## Paso 5: Crear las vistas y establecer las rutas (WIP)

Crear las siguientes vistas:

-   index.blade.php (Podemos hacer una presentación aca)
-   ver_notas.blade.php
-   crear_nota.blade.php
-   editar_nota.blade.php
-   ver_alumnos.blade.php
-   crear_alumno.blade.php
-   editar_alumno.blade.php
-   ver_materias.blade.php
-   crear_materia.blade.php
-   editar_materia.blade.php

(Necesitamos más vistas?)
