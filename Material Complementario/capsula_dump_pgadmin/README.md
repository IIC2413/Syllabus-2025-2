# Crear DB, Uso de Dumps y PgAdmin

Para esta cápsula se recomienda ver con anterioridad la [cápsula de postgres](https://github.com/IIC2413/Syllabus-2025-1/tree/main/Proyecto/Comandos%20Psql)

[Video cápsula :-)](https://youtu.be/Ka4buiK4AFo)

## Crear Base de Datos

1. Para crear una base de datos primero hay que ingresar a PostgreSQL

```bash
psql postgres
```

2. Ya dentro de PostgreSQL, se pueden visualizar las bases de datos de esta forma
```sql
\l
```

3. Para crear una base de datos se hace con el siguiente comando
```sql
CREATE DATABASE nombre_db;
```
4. Luego se hace conexión a la base da datos ya creada
```sql
\c nombre_db
```

## Dumps en bases de datos

### ¿Qué es un dump?
Un archivo que copia la estructura y datos de una base de datos en formato `.sql`
Pueden existir dumps que copian toda la base de datos, que copia solo la estructura de las tablas o solo los datos.

### ¿Cómo hacer uso de un dump?
Para utilizar un dump de una base de datos, se tiene que tener una base de datos vacía. Para su ejecución se hace de la siguiente manera
```bash 
psql -d nombre_db -f dump.sql
```
o dentro de postgres ya conectado a la base de datos
```psql
\i dump.sql
```

### ¿Cómo crear dumps de mis bases de datos?
En la terminal (fuera de PostgreSQL) se ejecuta el comando según el dump que se quiera obtener

1. Dump de Tablas y Estructura
```bash
pg_dump -d nombre_db > dump.sql
```
2. Dump de Estructura
```bash
pg_dump -d nombre_db --schema-only > dump_estructura.sql
```
3. Dump solo de datos (no crea las tablas)
```bash
pg_dump -d nombre_db --data-only > dump_datos.sql
```

## Uso de PgAdmin4

PgAdmin4 es una herramienta de administración y desarrollo para bases de datos PostgreSQL. 

[Link de descarga](https://www.pgadmin.org/download/)

### Conexión

Para conectarse a una base de datos se necesitan los siguientes datos

- Host 
- Puerto (por defecto siempre es el 5432)
- Nombre base de datos
- Usuario
- Contraseña

Para efectos de este curso (2025-2), las credenciales de este semestre son la siguiente

- Host: stonebraker.ing.uc.cl
- Puerto: 5432
- Nombre base de datos: usuario_uc.ex (x es el número de la entrega - también funciona en las cuentas personales usando bdd)
- Usuario: el mismo que el nombre de la base de datos
- Contraseña: número de alumno

### Subir Dump

1. Crear base de datos
2. Seleccionar base de datos
3. Restaurar (con click derecho)
4. Seleccionar archivo

