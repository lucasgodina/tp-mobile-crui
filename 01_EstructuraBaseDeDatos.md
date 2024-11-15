# Estructura de la Base de Datos

```plaintext
+------------+-------------------+------+-----+---------+----------------+
| Field      | Type              | Null | Key | Default | Extra          |
+------------+-------------------+------+-----+---------+----------------+
| id         | bigint unsigned   | NO   | PRI | NULL    | auto_increment |
| nombre     | varchar(255)      | NO   |     | NULL    |                |
| email      | varchar(255)      | NO   | UNI | NULL    |                |
| fecha_nacimiento | date        | NO   |     | NULL    |                |
| activo     | tinyint(1)        | NO   |     | 1       |                |
| created_at | timestamp         | YES  |     | NULL    |                |
| updated_at | timestamp         | YES  |     | NULL    |                |
+------------+-------------------+------+-----+---------+----------------+
```

```plaintext
+------------+-------------------+------+-----+---------+----------------+
| Field      | Type              | Null | Key | Default | Extra          |
+------------+-------------------+------+-----+---------+----------------+
| id         | bigint unsigned   | NO   | PRI | NULL    | auto_increment |
| nombre     | varchar(255)      | NO   |     | NULL    |                |
| carrera    | varchar(255)      | YES  |     | NULL    |                |
| created_at | timestamp         | YES  |     | NULL    |                |
| updated_at | timestamp         | YES  |     | NULL    |                |
+------------+-------------------+------+-----+---------+----------------+
```

```plaintext
+------------+-------------------+------+-----+---------+----------------+
| Field      | Type              | Null | Key | Default | Extra          |
+------------+-------------------+------+-----+---------+----------------+
| id         | bigint unsigned   | NO   | PRI | NULL    | auto_increment |
| alumno_id  | bigint unsigned   | NO   | MUL | NULL    |                |
| materia_id | bigint unsigned   | NO   | MUL | NULL    |                |
| nota       | int               | NO   |     | NULL    |                |
| fecha      | date              | NO   |     | NULL    |                |
| created_at | timestamp         | YES  |     | NULL    |                |
| updated_at | timestamp         | YES  |     | NULL    |                |
+------------+-------------------+------+-----+---------+----------------+
```

## Relaciones

-   `notas.alumno_id` referencia a `alumnos.id`
-   `notas.materia_id` referencia a `materias.id`
-   `alumnos.email` es único
-   `notas` tiene claves foráneas en `alumno_id` y `materia_id`
