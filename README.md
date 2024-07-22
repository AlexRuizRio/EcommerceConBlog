# E-commerce con Blog

¡Bienvenido al repositorio del proyecto de E-commerce con Blog! Este proyecto está construido con [Laravel](https://laravel.com/), utilizando [Blade](https://laravel.com/docs/9.x/blade) como motor de plantillas, [Bootstrap](https://getbootstrap.com/) para el diseño, [Livewire](https://laravel-livewire.com/) para componentes interactivos y JavaScript para funcionalidades adicionales.

## Tabla de Contenidos

1. [Descripción](#descripción)
2. [Características](#características)
3. [Requisitos](#requisitos)
4. [Instalación](#instalación)
5. [Configuración](#configuración)
6. [Uso](#uso)
7. [Contribución](#contribución)
8. [Licencia](#licencia)
9. [Agradecimientos](#agradecimientos)

## Descripción

Este proyecto es una aplicación de e-commerce con funcionalidades de blog. Los usuarios pueden navegar y comprar productos, así como leer y comentar en publicaciones de blog. El administrador puede gestionar productos, pedidos y publicaciones del blog desde un panel de administración.

## Características

- Gestión de productos
- Gestión de categorías
- Carrito de compras
- Procesamiento de pedidos
- Publicaciones de blog
- Comentarios en publicaciones
- Integración con pasarela de pagos
- Diseño responsive con Bootstrap
- Componentes interactivos con Livewire

## Requisitos

- PHP >= 8.0
- Composer
- Node.js & npm
- MySQL

## Instalación

 Clonar el repositorio

```bash
git clone https://github.com/tu-usuario/ecommerce-con-blog.git
cd ecommerce-con-blog
Instalar dependencias de PHP
bash
Copiar código
composer install
Instalar dependencias de JavaScript
bash
Copiar código
npm install
Configurar el archivo de entorno
bash
Copiar código
cp .env.example .env
Generar la clave de la aplicación
bash
Copiar código
php artisan key:generate

## Configuración
Configurar la base de datos
Edita el archivo .env y configura los parámetros de la base de datos:

makefile
Copiar código
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
Migrar la base de datos
bash
Copiar código
php artisan migrate
Poblar la base de datos con datos de ejemplo (opcional)
bash
Copiar código
php artisan db:seed
Compilar assets
bash
Copiar código
npm run dev

## Uso
Iniciar el servidor de desarrollo
bash
Copiar código
php artisan serve
Accede a la aplicación en tu navegador en http://localhost:8000.

## Contribución
Las contribuciones son bienvenidas. Si deseas contribuir, por favor sigue los siguientes pasos:

Realiza un fork del proyecto.
Crea una nueva rama (git checkout -b feature/nueva-funcionalidad).
Realiza tus cambios.
Haz un commit de tus cambios (git commit -am 'Agrega nueva funcionalidad').
Empuja a la rama (git push origin feature/nueva-funcionalidad).
Abre un Pull Request.

## Licencia
Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo LICENSE para obtener más información.

## Agradecimientos
Laravel
Bootstrap
Livewire
Blade
Alejandro Ruiz
