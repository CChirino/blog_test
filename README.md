# Blog 
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

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
Generamos el link, para el guardado de las imagenes
```
php artisan storage:link
```
Despues de haber configurado nuestro env vamos a generar la base de datos
```
php artisan migrate:fresh --seed
```

_Una vez realizado esto ingresamos al cliente con la siguienes credenciales_

```
Email : redactor@mail.com
Contraseña : redactor1234
```

## Autor ✒️

_Menciona a todos aquellos que ayudaron a levantar el proyecto desde sus inicios_

* **Christopher Chirino** - *Trabajo Inicial* - [CChirino](https://github.com/CChirino)
 

## Licencia 📄
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Este proyecto está bajo la Licencia MIT
