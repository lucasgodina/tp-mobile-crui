# Creación del Proyecto

## Paso 1: Crear el Proyecto con Composer

Para iniciar el proyecto, utilizamos Composer para crear una nueva aplicación. Ejecutamos el siguiente comando en la terminal:

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

```bash
php artisan make:controller EquipoController
php artisan make:controller JuegoController
```

Se editan los controladores según las funciones CRUD (Create, Read, Update, Delete).

## Paso 6: Crear las rutas

Se crean las rutas necesarias en el archivo /routes/web.php.
Para traer todas las rutas utilizamos:

```bash
Route::resource('X', XController::class);
```

## Paso 7: Crear las vistas

Se crean las 4 vistas necesarias por cada tabla.

- Create: Formulario de creación de Equipo o Juego
- Edit: Formulario para editar el Equipo o Juego
- Index: Vista para mostrar una lista de Equipos o Juegos, se puede acceder a la edición o eliminación de los mismos
- Show: Vista para mostrar un Equipo o Juego mas detalladamente

## Adicionales a tener en cuenta:

Vistas:

-   Se utilizo Carbon para formatear las fechas en formato DD-MM-YY
-   Se utiliza old() para retener los datos en los formularios y que el mismo no se "resetee"
