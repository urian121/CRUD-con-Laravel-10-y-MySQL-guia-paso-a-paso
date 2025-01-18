# CRUD completo con Laravel 10, MySQL y Bootstrap 5 🚀

##### Este tutorial te sumerge en el poder de Laravel 10 y MySQL, explorando la implementación de CRUD (Crear, Leer, Actualizar y Eliminar). Aprende a desarrollar aplicaciones web dinámicas y escalables con las prácticas de gestión de datos más efectivas. Descubre cómo crear, leer, actualizar y eliminar registros de manera eficiente mientras dominas las mejores prácticas de desarrollo web con Laravel y MySQL. Convierte tus ideas en aplicaciones funcionales y robustas con esta guía completa.

#### Resultado final 😲
![](https://raw.githubusercontent.com/urian121/imagenes-proyectos-github/master/crud-laravel10-y-mysql.png)

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

    protected $table = 'empleados'; // Nombre de la tabla en la base de datos

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


##### Usando el helper asset

      El helper asset generará la URL completa a la carpeta de avatares, asegurando que las imágenes se carguen correctamente independientemente de la ruta en la que te encuentres dentro de tu aplicación Laravel.
      <img src="{{ asset('avatars/' . $empleado->avatar) }}" alt="Avatar" width="50" height="50" />

##### 🔥 Nota

    Si no hay contenido en la sección 'content' de la vista que extiende app.blade.php,
    la plantilla base incluirá la lista de empleados por defecto.
    Si defines contenido en la sección 'content' de la vista que extiende la plantilla base,
    ese contenido se insertará en lugar de @yield('content') en la plantilla base.
    Si no defines ninguna sección 'content' en la vista, la lista de empleados se incluirá automáticamente.
    La parte @if (!trim($__env->yieldContent('content'))) ... @endif verifica si la sección 'content' está vacía en la vista
    que extiende la plantilla base. Si está vacía (es decir, no has definido ningún contenido para esa sección en tu vista),
    entonces se incluye la lista de empleados automáticamente.


    @if (empty(trim($__env->yieldContent('content'))))
        @include('empleados.index')
    @else
        @yield('content')
    @endif

#### Importante, pasos para correr el proyecto 🚀

    1. Actualizar dependencias de Composer
        composer update
    2. Actualizar dependencias de Composer
        composer install
    3. Generar una nueva clave de aplicación
        php artisan key:generate
    4. Configurar el archivo .env:
        Copia el archivo .env.example y renómbralo como .env.
        Completa los detalles de configuración necesarios, como la configuración de la base de datos y cualquier otra configuración específica de tu entorno.
    5. Crear la base de datos en MySQL y ejecutar migraciones
        php artisan migrate
    7. Iniciar el servidor de desarrollo
        php artisan serve

### Expresiones de Gratitud 🎁

    Comenta a otros sobre este proyecto 📢
    Invita una cerveza 🍺 o un café ☕
    Paypal iamdeveloper86@gmail.com
    Da las gracias públicamente 🤓.

## No olvides SUSCRIBIRTE 👍
