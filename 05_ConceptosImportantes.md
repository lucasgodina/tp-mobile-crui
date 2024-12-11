# Conceptos importantes de Laravel y la materia
En este documento, detallaremos conceptos que consideremos necesarios para defender este trabajo práctico de la mejor manera posible.

## MVC
### ¿Qué es el MVC?

MVC (Model-View-Controller // Modelo-Vista-Controlador) es un patrón de diseño de software que separa una aplicación en tres componentes principales.

1. Modelo (Model): Representa los datos y la lógica de negocio de la aplicación. Se encarga de gestionar el acceso y la manipulación de los datos.
2. Vista (View): Es la interfaz de usuario. Se encarga de presentar los datos al usuario y de recibir la interacción del usuario.
3. Controlador (Controller): Actúa como intermediario entre el modelo y la vista. Recibe las entradas del usuario desde la vista, procesa la lógica de negocio a través del modelo y actualiza la vista con los datos resultantes.

### Vistas

## Archivo .env
### ¿Cuál es la finalidad del archivo .env?

El archivo .env en Laravel se utiliza para almacenar configuraciones y variables de entorno que son específicas del entorno de desarrollo, pruebas o producción. Estas variables pueden incluir:

- Configuraciones de la base de datos
- Claves API
- Configuraciones de correo electrónico
- Otros parámetros de configuración sensibles

El uso del archivo .env permite mantener estas configuraciones fuera del código fuente, facilitando la gestión de diferentes entornos y mejorando la seguridad al no incluir información sensible en el repositorio de GitHub.

## Migraciones