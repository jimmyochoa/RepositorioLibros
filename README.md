# Biblioteca Laravel

Este es un proyecto de Laravel para una biblioteca que facilita el inicio de sesión de usuarios, la creación de usuarios y la administración de libros tipo CRUD (Crear, Leer, Actualizar, Eliminar).

## Índice

- [Descripción](#descripción)
- [Características](#características)
- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Configuración](#configuración)
- [Migraciones](#migraciones)
- [Uso](#Uso)
- [Capturas de Pantalla](#capturas-de-pantalla)
- [Licencia](#licencia)

## Descripción

El proyecto de la biblioteca está diseñado para facilitar la gestión de libros y usuarios. Permite a los administradores añadir, editar y eliminar libros y gestionar los usuarios. Los usuarios pueden registrarse, iniciar sesión y ver los libros disponibles.

## Características

- Registro e inicio de sesión de usuarios
- Gestión de usuarios (crear, editar, eliminar)
- Gestión de libros (crear, editar, eliminar)
- Autenticación y autorización
- Interfaz amigable

## Requisitos

- PHP >= 7.4
- Composer
- Laravel >= 8.x
- MySQL o cualquier otra base de datos compatible
- Node.js y npm (para compilación de activos front-end)

## Instalación

1. Clona el repositorio:

    ```bash
    git clone https://github.com/jimmyochoa/RepositorioLibros.git
    cd RepositorioLibros
    ```

2. Instala las dependencias de PHP con Composer:

    ```bash
    composer install
    ```

3. Instala las dependencias de Node.js:

    ```bash
    npm install
    npm run dev
    ```

## Configuración

1. Copia el archivo `.env.example` a `.env`:

    ```bash
    cp .env.example .env
    ```

2. Genera la clave de la aplicación:

    ```bash
    php artisan key:generate
    ```

3. Configura tu archivo `.env` con los detalles de tu base de datos:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_de_tu_base_de_datos
    DB_USERNAME=tu_usuario
    DB_PASSWORD=tu_contraseña
    ```

## Migraciones

Ejecuta las migraciones para crear las tablas necesarias en tu base de datos:

```bash
php artisan migrate

## Uso

Para iniciar el servidor de desarrollo de Laravel:

```bash
php artisan serve
