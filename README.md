# 🛍️ CRUD de Productos — PHP + MySQL
<img width="1394" height="860" alt="image" src="https://github.com/user-attachments/assets/8e91705c-cf4d-468f-bc2b-fb342be2916b" />
<img width="1306" height="741" alt="image" src="https://github.com/user-attachments/assets/15baa31e-98f7-4b3b-9847-f4e444679525" />


Proyecto práctico desarrollado para reforzar conocimientos de **PHP, MySQL, SQL y operaciones CRUD**, trabajando con una base de datos local mediante XAMPP.

El proyecto simula una herramienta sencilla de gestión de productos, permitiendo consultar, agregar, editar y eliminar registros almacenados en una base de datos.

## 🎯 Objetivo

Este proyecto forma parte de mi aprendizaje técnico orientado a posiciones de **Technical Support, Support Analyst y Technical Customer Support**.

El objetivo es desarrollar una base práctica para comprender cómo funcionan las aplicaciones que interactúan con bases de datos y poder identificar, analizar y resolver incidencias relacionadas con datos, consultas SQL y operaciones dentro de un sistema.

## 🛠️ Tecnologías utilizadas

* **PHP**
* **MySQL**
* **SQL**
* **HTML5**
* **CSS3**
* **XAMPP**
* **Git & GitHub**

## ⚙️ Funcionalidades

El sistema permite realizar las principales operaciones CRUD:

* ➕ **Create:** agregar nuevos productos.
* 🔎 **Read:** consultar los productos almacenados.
* ✏️ **Update:** editar productos existentes.
* 🗑️ **Delete:** eliminar productos.

Cada producto contiene información como:

* ID
* Nombre
* Precio

## 🗄️ Base de datos

El proyecto utiliza una base de datos MySQL llamada `crud_productos`.

La aplicación se conecta a MySQL mediante PHP utilizando `mysqli`.

El proyecto fue desarrollado inicialmente en un entorno local utilizando:

**XAMPP + Apache + MySQL + phpMyAdmin**

## 📂 Estructura del proyecto

```text
crud-php-mysql/
│
├── index.php          # Listado de productos
├── crear.php          # Alta de productos
├── editar.php         # Edición de productos
├── eliminar.php       # Eliminación de productos
├── conexion.php       # Conexión con MySQL
├── estilos.css        # Estilos visuales
├── database.sql       # Estructura de la base de datos
└── README.md          # Documentación del proyecto
```

## 🔄 Flujo de funcionamiento

```text
Usuario
   ↓
Formulario / interfaz web
   ↓
PHP
   ↓
Consulta SQL
   ↓
MySQL
   ↓
Respuesta
   ↓
Interfaz actualizada
```

## 💻 Entorno de desarrollo

Para ejecutar el proyecto localmente:

1. Instalar **XAMPP**.
2. Iniciar **Apache** y **MySQL**.
3. Colocar el proyecto dentro de:

```text
C:\xampp\htdocs\
```

4. Crear/importar la base de datos en **phpMyAdmin**.
5. Configurar la conexión en `conexion.php`.
6. Abrir:

```text
http://localhost/primer_crud/
```

## 📚 Aprendizajes

A través de este proyecto practiqué:

* Conexión entre PHP y MySQL.
* Estructura y consultas SQL.
* Operaciones CRUD.
* Manejo de formularios.
* Obtención y modificación de registros.
* Identificación de errores de conexión con bases de datos.
* Uso de phpMyAdmin.
* Uso de XAMPP para desarrollar y probar aplicaciones localmente.
* Control de versiones con Git.
* Publicación y gestión de proyectos mediante GitHub.

## 🚀 Próximos pasos

Como parte del aprendizaje, el proyecto puede continuar evolucionando incorporando:

* Validaciones adicionales.
* Manejo de errores más completo.
* Consultas SQL más avanzadas.
* Búsqueda y filtros de productos.
* Paginación.
* Autenticación de usuarios.
* Mejoras de seguridad.
* Implementación de una API.

---

### 👩‍💻 Sobre el proyecto

Proyecto desarrollado como práctica personal para fortalecer mis conocimientos técnicos y complementar mi experiencia en **Customer Experience, Support y Operations** con herramientas de programación y bases de datos.
