# Proyectos BOOSTRAP, PHP y JS.
Este repositorio alberga varios proyectos elegantes y bien estructurados que consta de tres partes principales: Index Principal, JSyPHP, y PHP. Cada parte aborda una funcionalidad específica del proyecto, proporcionando una experiencia completa para el desarrollo web con Bootstrap, JavaScript (SPA), y PHP.

# Estructura del Repositorio
## 1. Index Principal (Bootstrap Landing Page)
En la raíz del proyecto, encontrarás el archivo index.html, que contiene el código de la página principal del proyecto, desarrollada utilizando Bootstrap. Esta página es la parte para el lado usuario y sirve como la entrada a las funcionalidades principales del proyecto.

## 2. JSyPHP (JavaScript SPA)
La carpeta JSyPHP se implementa una Single Page Application (SPA) con JavaScript. Aquí, los administradores pueden dar de alta alumnos y exámenes, así como editar, borrar y listar esta información de manera dinámica.

## 3. PHP (Solo PHP[NO SPA])
La carpeta PHP es la tercera parte del proyecto, encontramos una aplicacion web la cual replica las funcionalidades de la parte e JSyPHP pero utiliza exclusivamente PHP para procesar, gestionar los datos y abrir cada funcion en una página diferente (No utilizamos SPA).

## 4. Documentación
Podemos encontrar los entregables y la documentacion de lo necesario en la carpeta raiz del proyecto.

## 5. Imágenes
La carpeta images almacena las imágenes y recursos visuales utilizados en la documentación y en las distintas partes del proyecto.

## 6. Despliegue a la Web
Link landPage --> http://boostrapmengo.infinityfreeapp.com

## Instrucciones de Uso
Utiliza Docker para levantar las partes de JSyPHP y PHP:
  1. Clona este repositorio en tu máquina local.
  2. Accede a la carpeta que quieras levantar con docker (JSyPHP o PHP) desde la consola y ejecuta el comando ```docker compose up -d```.
  3. Accede a http://localhost:8000 e importa la base de datos adjuntada en la carpeta database dentro de alguna de las carpetas de las partes del proyecto.
    3.1. El usuario y contraseña de phpMyAdmin son: user --> root | password --> test
  4. Una vez importada, accede a http://localhost y ya podrás disfrutar de la pagina y sus funcionalidades.

Parte de boostrap(landPage):
  1. Accede a index.html y disfruta. (No se necesita nada adicional).

***

Esto corresponde a los proyectos de Desarrollo de Interfaces Web (Boostrap y JS) y Horas de Libre Configuración (PHP).
### Gracias por ver :)




