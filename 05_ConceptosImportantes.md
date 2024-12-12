# Conceptos importantes de Laravel y la materia
En este documento, detallaremos conceptos que consideremos necesarios para defender este trabajo práctico de la mejor manera posible.

## MVC
### ¿Qué es el MVC?

MVC (Model-View-Controller // Modelo-Vista-Controlador) es un patrón de diseño de software que separa una aplicación en tres componentes principales.

1. Modelo (Model): Representa los datos y la lógica de negocio de la aplicación. Se encarga de gestionar el acceso y la manipulación de los datos.
2. Vista (View): Es la interfaz de usuario. Se encarga de presentar los datos al usuario y de recibir la interacción del usuario.
3. Controlador (Controller): Actúa como intermediario entre el modelo y la vista. Recibe las entradas del usuario desde la vista, procesa la lógica de negocio a través del modelo y actualiza la vista con los datos resultantes.

### Vistas
Por cada CRUD que creamos, generalmente se crean cuatro vistas principales:

1. **Index (Listado):**
   Esta vista muestra una lista de todos los registros de una entidad. Suele incluir una tabla con los datos más relevantes y opciones para ver, editar o eliminar cada registro.

2. **Create (Crear):**
   Esta vista proporciona un formulario para crear un nuevo registro. Incluye campos para ingresar los datos necesarios y un botón para enviar el formulario y guardar el nuevo registro en la base de datos.

3. **Edit (Editar):**
   Similar a la vista de creación, esta vista proporciona un formulario para editar un registro existente. Los campos del formulario están pre-rellenados con los datos actuales del registro, y el usuario puede modificar estos datos y guardarlos.

4. **Show (Mostrar):**
   Esta vista muestra los detalles de un registro específico. Incluye todos los datos relevantes del registro y, a menudo, opciones para editar o eliminar el registro.

Estas vistas permiten gestionar de manera completa las operaciones de creación, lectura, actualización y eliminación (CRUD) de una entidad en una aplicación.

## Archivo .env
### ¿Cuál es la finalidad del archivo .env?

El archivo .env en Laravel se utiliza para almacenar configuraciones y variables de entorno que son específicas del entorno de desarrollo, pruebas o producción. Estas variables pueden incluir:

- Configuraciones de la base de datos
- Claves API
- Configuraciones de correo electrónico
- Otros parámetros de configuración sensibles

El uso del archivo .env permite mantener estas configuraciones fuera del código fuente, facilitando la gestión de diferentes entornos y mejorando la seguridad al no incluir información sensible en el repositorio de GitHub.

## Migraciones
### ¿Qué son las migraciones?

Las migraciones en Laravel son una forma de gestionar la estructura de la base de datos de manera programática. Permiten definir y modificar tablas y columnas de la base de datos utilizando código PHP en lugar de SQL.

### ¿Cómo se usan?

1. **Crear una migración:**
   Para crear una nueva migración, se utiliza el comando:
   ```sh
   php artisan make:migration nombre_de_la_migracion
    ```
2. **Definir la estructura:**
   En el archivo de migración generado, se definen las tablas y columnas en los métodos up y down. El método up se utiliza para aplicar los cambios, y el método down para revertirlos.
3. **Ejecutar las migraciones:**
   Para aplicar todas las migraciones pendientes y actualizar la base de datos, se utiliza el comando:
   ```sh
   php artisan migrate
   ```
4. **Revertir migraciones**
   Para revertir la última migración ejecutada, se utiliza el comando:
   ```sh
   php artisan migrate:rollback
   ```