# API CATGORIA PHP MYSQL - DOCKER

Este repositorio contiene una API simple de categorías desarrollada en PHP que utiliza MySQL como base de datos. La API permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en una tabla de categorías.

## Características

- **Crear categorías:** Permite agregar nuevas categorías a la base de datos.
- **Listar categorías:** Devuelve todas las categorías almacenadas en la base de datos.
- **Obtener una categoría por ID:** Recupera una categoría específica basada en su ID.
- **Actualizar categorías:** Permite modificar el nombre y la descripción de una categoría existente.
- **Eliminar categorías:** Elimina una categoría de la base de datos según su ID.

## Estructura del Proyecto

El proyecto está organizado de la siguiente manera:

- **config:** Contiene archivos de configuración para la base de datos y otras configuraciones de la aplicación.
- **controlador:** Aquí se encuentran los controladores de la API que manejan las solicitudes HTTP.
- **models:** Contiene los modelos que representan las entidades de la base de datos y realizan operaciones CRUD.
- **category.sql:** Script SQL para crear la tabla de categorías en la base de datos MySQL.
- **docker-compose.yml:** Archivo Docker Compose para ejecutar el entorno de desarrollo local.

## Configuración

1. **Clonar el Repositorio:**
   ```bash
   git clone https://github.com/tu_usuario/fc-api-php.git
