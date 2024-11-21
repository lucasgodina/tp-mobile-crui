# Cómo correr este proyecto de manera local

## Paso 1: Clonar el proyecto

Clonar este proyecto en la carpeta ~/xampp/htdocs

```bash
git clone https://github.com/lucasgodina/tp-mobile-crui.git
```

## Paso 2: Navegar al directorio del proyecto

Una vez clonado el proyecto, navegar hasta la carpeta ~/xampp/htdocs
Ejemplo:

```bash
cd xampp/htdocs/tp-mobile-crui
```

## Paso 3: Crear una base de datos y configurar el entorno

Utilizando Xampp, a traves de la url [localhost/phpmyadmin](localhost/phpmyadmin) creamos una base de datos llamada "equipos_esports".

Luego creamos el archivo .env

```bash
cp .env.example .env
php artisan key:generate
```

Configuramos la base de datos en el archivo .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
<<<<<<< HEAD
DB_DATABASE=equipos_esports
=======
DB_DATABASE=equipos:esports
>>>>>>> 392abfda7e9da33a2551ee6538430c5bdf44570e
DB_USERNAME=root
DB_PASSWORD=
```

### Paso 4: Instalar las dependencias

```bash
composer install
```

### Paso 5: Migrar la base de datos

Ejecutar las migraciones para crear las tablas necesarias para la base de datos

```bash
php artisan migrate
```

### Paso 5: Iniciar el servidor:

Dar inicio al servidor de desarrollo de Laravel

```bash
php artisan serve
```
