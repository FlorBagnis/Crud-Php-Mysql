# 🛍️ CRUD de Productos — PHP + MySQL

<img width="1690" height="867" alt="image" src="https://github.com/user-attachments/assets/f7724b8f-4118-4163-a487-db5634b8e771" />


>Proyecto práctico desarrollado para aprender y reforzar conocimientos de **PHP, MySQL, SQL y operaciones CRUD**, utilizando XAMPP como entorno de desarrollo local.

Además, el proyecto cuenta con una **demo frontend interactiva publicada mediante GitHub Pages**, que permite probar las operaciones CRUD directamente desde el navegador.

<p align="center">
  <a href="https://florbagnis.github.io/Crud-Php-Mysql/">
    <img src="https://img.shields.io/badge/Ver_Demo-Abrir_Proyecto-ff69b4?style=for-the-badge&logo=githubpages&logoColor=white" alt="Ver Demo" />
  </a>
</p>

## 🚀 Demo online



<img width="1588" height="878" alt="image" src="https://github.com/user-attachments/assets/b2e50fdc-bc3f-4e7b-9488-982ca62f3c35" />


La demo permite:

* ➕ Agregar productos
* ✏️ Editar productos
* 🗑️ Eliminar productos
* 💾 Persistir los cambios utilizando `localStorage`

> La demo de GitHub Pages funciona con **HTML, CSS y JavaScript** y no utiliza PHP ni MySQL.
> El CRUD original desarrollado con PHP + MySQL funciona localmente mediante XAMPP.



---

## 🎯 Objetivo del proyecto

El objetivo principal es practicar conceptos fundamentales de desarrollo web y bases de datos que pueden resultar útiles en posiciones de:

* Technical Support
* Support Analyst
* Technical Customer Support
* Customer Experience
* Operations

El proyecto busca comprender cómo interactúan una interfaz, el código del servidor, las consultas SQL y una base de datos.

---

## 🛠️ Tecnologías utilizadas

* PHP
* MySQL
* SQL
* HTML5
* CSS3
* JavaScript
* XAMPP
* phpMyAdmin
* Git
* GitHub
* GitHub Pages

---

## 📋 Funcionalidades

### CRUD con PHP + MySQL

La versión principal del proyecto permite:

* **Create** → Crear productos
* **Read** → Consultar productos
* **Update** → Editar productos
* **Delete** → Eliminar productos

Los productos se almacenan en una base de datos MySQL.

### Demo interactiva

La versión publicada en GitHub Pages permite realizar las mismas operaciones desde el frontend:

* Crear productos
* Visualizar productos
* Editar productos
* Eliminar productos

Los cambios de la demo se almacenan mediante `localStorage`.

---

## 🗄️ Base de datos

Base de datos utilizada:

```text
crud_productos
```

Tabla principal:

```text
productos
```

Estructura:

| Campo  | Tipo          | Descripción         |
| ------ | ------------- | ------------------- |
| id     | INT           | Identificador único |
| nombre | VARCHAR(100)  | Nombre del producto |
| precio | DECIMAL(10,2) | Precio del producto |
| fecha  | DATE          | Fecha               |
| hora   | TIME          | Hora                |

El campo `id` funciona como **clave primaria** y utiliza `AUTO_INCREMENT`.

El archivo `database.sql` contiene el script necesario para crear la base de datos y la tabla.

---

## 🔄 Flujo del proyecto

### Implementación PHP + MySQL

```text
Usuario
   ↓
Formulario / Interfaz
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

### Demo GitHub Pages

```text
Usuario
   ↓
HTML / CSS
   ↓
JavaScript
   ↓
localStorage
   ↓
Interfaz actualizada
```

---

## 📁 Estructura del proyecto

```text
crud-php-mysql/
│
├── index.php
├── index.html
├── crear.php
├── editar.php
├── eliminar.php
├── conexion.php
├── estilos.css
├── database.sql
└── README.md
```

### Principales archivos

**`index.php`**
Muestra los productos almacenados en MySQL.

**`index.html`**
Versión frontend interactiva utilizada por GitHub Pages.

**`crear.php`**
Permite insertar nuevos productos en MySQL.

**`editar.php`**
Permite modificar productos existentes.

**`eliminar.php`**
Permite eliminar productos.

**`conexion.php`**
Contiene la conexión entre PHP y MySQL.

**`database.sql`**
Script para crear la base de datos y la tabla.

**`estilos.css`**
Estilos visuales de la aplicación PHP.

---

## 💻 Ejecutar el CRUD PHP + MySQL localmente

Para ejecutar la versión completa:

### 1. Instalar XAMPP

Iniciar:

```text
Apache
MySQL
```

### 2. Colocar el proyecto

Copiar la carpeta dentro de:

```text
C:\xampp\htdocs\
```

Por ejemplo:

```text
C:\xampp\htdocs\primer_crud
```

### 3. Crear la base de datos

Abrir:

```text
http://localhost/phpmyadmin/
```

Crear/importar la base de datos utilizando:

```text
database.sql
```

### 4. Ejecutar el proyecto

Abrir:

```text
http://localhost/primer_crud/
```

---

## 🧠 Conceptos practicados

Durante el desarrollo del proyecto se trabajaron conceptos como:

* Conexión PHP + MySQL
* Consultas SQL
* `SELECT`
* `INSERT`
* `UPDATE`
* `DELETE`
* Claves primarias
* `AUTO_INCREMENT`
* Tipos de datos SQL
* Formularios HTML
* Procesamiento de datos mediante PHP
* CRUD
* `localStorage`
* JavaScript
* Git
* GitHub
* GitHub Pages

---

## 🔎 Relación con Technical Support

Este proyecto también sirve como práctica para comprender problemas técnicos relacionados con aplicaciones que utilizan bases de datos.

Por ejemplo:

* Verificar si un registro existe en una base de datos.
* Consultar información mediante SQL.
* Detectar datos incorrectos o inconsistentes.
* Comprender errores relacionados con `INSERT`, `UPDATE` o `DELETE`.
* Identificar problemas de conexión entre una aplicación y una base de datos.
* Comprender el flujo entre frontend, backend y base de datos.

El objetivo no es desarrollar un backend avanzado, sino adquirir una base técnica que permita **comprender, investigar y resolver incidencias relacionadas con aplicaciones y datos**.

---

## 📌 Próximos pasos

Algunas mejoras posibles para futuras versiones:

* Validaciones más avanzadas.
* Búsqueda y filtrado de productos.
* Ordenamiento por precio.
* Paginación.
* Manejo de errores.
* Prepared Statements.
* Autenticación de usuarios.
* Mejoras de seguridad.
* Conexión con una base de datos online.

---


### 👩‍💻 Autora

**Florencia Bagnis**

* 💼 [LinkedIn](https://www.linkedin.com/in/florencia-bagnis)
* 💻 [Portfolio](https://florbagnis.github.io/Portfolio-FlorBagnis/)
* 💌 [florenciasoledadbagnis@gmail.com](mailto:florenciasoledadbagnis@gmail.com)

<br>

> 🎓 Proyecto desarrollado como parte de mi aprendizaje práctico en **PHP**, **MySQL**, **SQL** y **desarrollo web**, orientado a complementar mi perfil en **Customer Experience**, **Technical Support** y **Operations**.
