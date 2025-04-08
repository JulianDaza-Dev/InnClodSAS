## GUIA INSTALACION
1) El primer paso es asegurarse de tener instalado Xampp o su equivalente para Linux.<br>
2) Tener versión 8.1 de PHP mínimo, tener instalado Composer, MySQL, Node.js, npm y Git.<br>
3) Clonar el repositorio con el siguiente comando: `git@github.com:JulianDaza-Dev/InnClodSAS.git` e ingresar al repositorio con `cd InnClodSAS`.<br>
4) Instalar las dependencias de PHP con `composer install`.<br>
5) Instalar las dependencias de front con `npm install`.<br>
6) Ejecutar el comando "cp .env.example" y en el archivo .env configurar el DB_DATABASE a INNCLOD, el DB_USERNAME y DB_PASSWORD al que tenga y crea la base de datos con "CREATE DATABASE INNCLOD"
7) Correr las migraciones con ""php artisan migrate --seed
8) Ejecutar los comandos npm run dev y npm run build
9) Levantar el servidor con "php artisan serve"

## GUIA FUNCIONAMIENTO
Al iniciar el software se cuenta con dos botones en la parte superior derecha, los cuales tienen dos funcionalidades diferentes, "Log In" con el cual ingresamos a aplicativo con un usuario ya creado y el boton "Register" con el cual nos registramos con un usuario nuevo  


    
![Image Alt](https://github.com/JulianDaza-Dev/InnClodSAS/blob/main/1.png?raw=true)  

aqui podemos observar la vista para registrarse como usuario nuevo, se hace uso de spatie para dar roles y poder diferenciar las funcionalidades del "administrador" y el "cliente", todo usuario nuevo que se registre tendra el rol de "cliente"  

![Image Alt](https://github.com/JulianDaza-Dev/InnClodSAS/blob/main/2.png?raw=true)  

aqui podemos observar la vista para ingresar con un usuario ya creado

![Image Alt](https://github.com/JulianDaza-Dev/InnClodSAS/blob/main/3.png?raw=true)  


Contamos con una vista intermedia en la cual notificamos al usuario que pudo ingresar con exito al aplicativo, en la parte superior izquierda encontramos un boton el cual nos va a acompañar durante la ejecucion del aplicativo, el cual nos informa el nombre del usuaio, y si le hacemos clic nos dara la opcion de salir de la cuenta, a su ves el boton central nos llevara a la pantalla de inicio, en la cual realizaremos la gran mayoria de operaciones

![Image Alt](https://github.com/JulianDaza-Dev/InnClodSAS/blob/main/4.png?raw=true)



Esta vista es  la del "ADMINISTRADOR" el cual cuenta con funciones diferentes a los clientes. Con este usuario se puede observar los productos ya existentes y crear nuevos, a su vez cuenta con una lista de usuarios con un boton a la derecha de cada uno, el cual nos dejara administrar los productos que puede visualizar cada uno

![Image Alt](https://github.com/JulianDaza-Dev/InnClodSAS/blob/main/5.png?raw=true)



El formulario para crear un usuario cuenta con 2 campos obligatorios, el nombre y stock, los cuales cuentan con validaciones para el usuario

![Image Alt](https://github.com/JulianDaza-Dev/InnClodSAS/blob/main/6.png?raw=true)  


Aqui podemos observar la vista de administrar productos de un cliente en concreto, el cual se actualiza a tiempo real 

![Image Alt](https://github.com/JulianDaza-Dev/InnClodSAS/blob/main/7.png?raw=true)   


Esta vista es la que veran los clientes en la pantalla de inicio, la cual cuenta con un boton para ver las ordenes ya creadas con anterioridad, el formulario para agregar un nuevo producto a la nueva orden, el cual solo cuenta con los productos disponibles para el y la debida lista de productos en la orden y por ultimo la lista final muestra los productos disponibles para el y su stock

![Image Alt](https://github.com/JulianDaza-Dev/InnClodSAS/blob/main/8.png?raw=true)  


Podemos observar como se agrega un producto a la orden con su cantidad requerida

![Image Alt](https://github.com/JulianDaza-Dev/InnClodSAS/blob/main/9.png?raw=true)


Al presionar el boton de "Ordenar" nos lleva a la vista de confirmacion, la cual es el filtro de validacion de los productos y comprobacion de disponibilidad de stock 

![Image Alt](https://github.com/JulianDaza-Dev/InnClodSAS/blob/main/10.png?raw=true)

Podemos observar lo que ocurre al presionar el boton "Confirmar" si introducimos una cantidad mayor al stock, se mostrara uno mensaje de alerta(se mostrara una alerta por vez y para poder eliminar un producto tenermos que volver a la vista anteriro con el boton "Volver")

![Image Alt](https://github.com/JulianDaza-Dev/InnClodSAS/blob/main/13.png?raw=true)

Al introducir las cantidades disponibles en el stock nos devolvera a la vista de inicio descontando la cantidad del stock disponible de los productos seleccionados

![Image Alt](https://github.com/JulianDaza-Dev/InnClodSAS/blob/main/11.png?raw=true)


Por ultimo podemos ver la vista de "Ver Ordenes", la cual muestra el ID de la orden y la hora de creacion 

![Image Alt](https://github.com/JulianDaza-Dev/InnClodSAS/blob/main/12.png?raw=true)


## About Laravel



- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
