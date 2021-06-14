
# Blog 

 Este blog, es una proyecto sencillo con su administrador y su vistas de cliente. Se construyo con las siguientes tecnologias:

* PHP 7.4
* Laravel 8
* Vue 3
* Tailwind CSS
* Inertia.js
* Laravel Jetstream
* MySQL

## Comenzamos 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

Mira **Deployment** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

Necesitas tener configurado lo siguiente en tu local:

* PHP 7.4
* Apache o NGINX (Recomiendo este ultimo)
* Composer
* Node.js
* MYSQL


### Instalación despues de clonar el repositorio 🔧

Ejecutamos este conjunto, de pasos

Primero instalamos el composer

```
composer install
```
Instalamos, las dependencias del npm
```
npm install
```
Creamos una copia de nuestro .env.example 
```
cp .env.example .env
```
Generamos el key de encriptacion 
```
php artisan key:generate
```
Despues de haber configurado nuestro env vamos a generar la base de datos
```
php artisan migrate:fresh --seed
```

_Finaliza con un ejemplo de cómo obtener datos del sistema o como usarlos para una pequeña demo_



## Autor ✒️

_Menciona a todos aquellos que ayudaron a levantar el proyecto desde sus inicios_

* **Christopher Chirino** - *Trabajo Inicial* - [CChirino](https://github.com/CChirino)
 

## Licencia 📄

Este proyecto está bajo la Licencia (Tu Licencia) - mira el archivo [LICENSE.md](LICENSE.md) para detalles


## License
[MIT](https://choosealicense.com/licenses/mit/)