# Estructura de Carpetas y Archivos

Este documento describe brevemente las distintas carpetas, subcarpetas y archivos que integran el proyecto.

## Carpeta Principal

-   **/app**: Contiene el núcleo de la aplicación.

    -   **/Console**: Comandos de consola personalizados.
    -   **/Exceptions**: Manejo de excepciones.
    -   **/Http**: Controladores, middleware y requests.
        -   **/Controllers**: Controladores de la aplicación.
        -   **/Middleware**: Middleware de la aplicación.
        -   **/Requests**: Requests personalizados.
    -   **/Models**: Modelos Eloquent de la aplicación.
    -   **/Providers**: Proveedores de servicios.

-   **/bootstrap**: Archivos de arranque de la aplicación.

    -   **/cache**: Archivos de caché generados.

-   **/config**: Archivos de configuración de la aplicación.

-   **/database**: Migraciones, seeds y factories.

    -   **/factories**: Definiciones de factories para modelos.
    -   **/migrations**: Archivos de migraciones de base de datos.
    -   **/seeds**: Seeds de base de datos.

-   **/public**: Punto de entrada público de la aplicación.

    -   **/css**: Archivos CSS.
    -   **/js**: Archivos JavaScript.

-   **/resources**: Recursos de la aplicación (vistas, idiomas, etc.).

    -   **/lang**: Archivos de localización.
    -   **/views**: Vistas Blade de la aplicación.

-   **/routes**: Archivos de rutas de la aplicación.

    -   **/web.php**: Rutas web.
    -   **/api.php**: Rutas API.

-   **/storage**: Archivos generados y caché.

    -   **/app**: Archivos de la aplicación.
    -   **/framework**: Archivos de framework (sesiones, vistas compiladas, etc.).
    -   **/logs**: Archivos de logs.

-   **/tests**: Pruebas unitarias y de características.

    -   **/Feature**: Pruebas de características.
    -   **/Unit**: Pruebas unitarias.

-   **/vendor**: Dependencias del proyecto gestionadas por Composer.

## Archivos Principales

-   **.env**: Archivo de configuración de entorno.
-   **.gitignore**: Archivos y carpetas ignorados por Git.
-   **composer.json**: Archivo de configuración de Composer.
-   **composer.lock**: Archivo de bloqueo de dependencias de Composer.
-   **package.json**: Archivo de configuración de npm.
-   **webpack.mix.js**: Archivo de configuración de Laravel Mix.
-   **artisan**: Consola de comandos de Laravel.
-   **README.md**: Documentación del proyecto.
