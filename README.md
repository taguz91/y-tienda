# Tienda - Lección Uno 

Ejemplo de proyecto rest. 

Configuramos el proyecto en .env 

### Modelos
- Tiendas
- Productos 
- Ventas

### Tablas

Crearemos las tablas para nuestra base de datos, en laravel los conoceremos como migrations.

```bash 
$ php artisan make:migration create_<name>_table
```

**Tienda**

Atributos: 
- id
- nombre 
- direccion

**Producto**

Atributos:
- id
- id_tienda
- nombre
- precio
- stock

**Ventas**

Atributo: 
- id
- id_tienda
- productos 
- total 

A todas las tablas les agregamos softDelete que nos ayuda a manejar el borrado logico. 

```php
$table->softDeletes();
```

Migramos todas las tablas a la base de datos. 

```bash
$ php artisan migrate
```

### Modelos 
Creamos nuestros modelos.

```bash
$ php artisan make:model Models/<Nombre>
```

- Agregaremos SoftDeletes a los modelos para usar borrados logicos. 
- Agregaremos la propiedad ```$fillable```, que son los valores que pueden ser llenados desde una petición.
- Creamos todas las relaciones.

### Seeders 
Crearemos seeders, para tener datos de prueba en nuestra base de datos. 

```bash
$ php artisan make:seed <Name>Seeder
```

### Controladores
Creamos los controladores de tipo rest.

```bash
$ php artisan make:controller api/<version>/<Nombre>Controller --api
```

### Request 
Creamos request, que seran los encargados de validar las peticiones que recibiremos en nuestra api. 

```bash
$ php php artisan make:request <Nombre><Metodo>Request
```

### Validaciones 
Crearemos un middleware para validaciones. 
