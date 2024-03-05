# CRUD completo con Laravel 10 y MySQL

##### Requisitos previos:

    Antes de comenzar, asegúrate de tener instalado PHP, Composer y cualquier servidor de apache
    php --version
    composer --version
    xammp

##### Crear un proyecto de Laravel

    composer create-project laravel/laravel crud-laravel-10-empleados "10.*"

##### Acceder al proyecto creado

    cd crud-laravel-10-empleados

##### Generación de clave de aplicación

    php artisan key:generate

##### Crear Base de Datos en MySQL

    bd_crud_laravel_10

##### Configuración de la base de datos

    Abre el archivo .env y configura los detalles de tu base de datos, como el nombre de la base de datos, el nombre de usuario y la contraseña.

##### Ejecución del servidor de desarrollo

    php artisan serve
    php artisan serve --port=8500

##### Para Crear mi Modelo, Controlador y Migraciones

    php artisan make:model Empleados -mcr

##### Correr las migraciones

    php artisan migrate

##### Definir los campos para mi tabla en la Migracion correspondiente a mi tabla

        Schema::create('emplados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('edad')->nullable();
            $table->string('cedula')->nullable();
            $table->string('sexo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('cargo')->nullable();
            $table->string('avatar')->nullable();
            $table->timestamps();
        });

##### Definir los campos en mi modelo para trabahar con mi tabla

    protected $table = 'tbl_empleados'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'edad',
        'cedula',
        'sexo',
        'telefono',
        'cargo',
        'avatar'
    ];

##### Notas con las Migraciones

    - Subir la migracion.
        php artisan migrate
    - Deshacer la última migración ejecutada
        php artisan migrate:rollback

    - Deshacer todas las migraciones
        php artisan migrate:reset

    - Muestrar todas las migraciones indicando cuales han sido ejecutadas
        php artisan migrate:status
    - Deshace todas las migraciones y las ejecuta otra vez.
        php artisan migrate:refresh

##### Para actualizar migraciones

    php artisan migrate:refresh
