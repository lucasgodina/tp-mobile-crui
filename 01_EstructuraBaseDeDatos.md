# Estructura de la Base de Datos

### Equipos

```plaintext
+------------+-------------------+------+-----+---------+----------------+
| Campo      | Tipo              | Null | Key | Default | Extra          |
+------------+-------------------+------+-----+---------+----------------+
| id         | bigint unsigned   | NO   | PRI | NULL    | auto_increment |
| nombre     | varchar(255)      | NO   |     | NULL    |                |
| email      | varchar(255)      | NO   | UNI | NULL    |                |
| fecha_fundacion | date         | NO   |     | NULL    |                |
| activo     | tinyint(1)        | NO   |     | 1       |                |
| victorias  | integer           | NO   |     | NULL    |                |
| juego_id   | timestamp         | NO   |     | NULL    |                |
| created_at | timestamp         | YES  |     | NULL    |                |
| updated_at | timestamp         | YES  |     | NULL    |                |
+------------+-------------------+------+-----+---------+----------------+
```

### Juegos

```plaintext
+------------+-------------------+------+-----+---------+----------------+
| Campo      | Tipo              | Null | Key | Default | Extra          |
+------------+-------------------+------+-----+---------+----------------+
| id         | bigint unsigned   | NO   | PRI | NULL    | auto_increment |
| nombre     | varchar(255)      | NO   |     | NULL    |                |
| created_at | timestamp         | YES  |     | NULL    |                |
| updated_at | timestamp         | YES  |     | NULL    |                |
+------------+-------------------+------+-----+---------+----------------+
```

## Relaciones

-   `equipos.juego_id` referencia a `juegos.id`
