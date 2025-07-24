# CRUD Clientes (Laravel 11)

Este proyecto es un ejemplo de una aplicación **CRUD de clientes** usando **Laravel 11** y **MySQL**. Permite crear, leer, actualizar y eliminar registros de clientes de forma simple y efectiva.

---

## 🧩 Características principales

-   MVC estándar con **Eloquent ORM**
-   Rutas RESTful (`Route::resource`)
-   Validación de datos en formularios
-   Views en Blade con Bootstrap para una UI sencilla
-   Migraciones para crear la tabla `clientes`
-   Soporte para `migrations` y `seeders` (si aplican)

---

## ⚙️ Requisitos

-   PHP 8.2+ (compatible con Laravel 11)
-   Composer
-   MySQL (o MariaDB)
-   Node.js + npm (solo si se usa compilación front-end)

---

## 🔧 Instalación y puesta en marcha

1. **Clona el repositorio**

2. **Instala dependencias PHP**

    ```bash
    composer install
    ```

3. **(Opcional) Instala dependencias JS para assets**
    ```bash
    npm install
    npm run build
    ```

---

## 🛠️ Configuración del entorno

1. Copia el archivo `.env.example`:

    ```bash
    cp .env.example .env
    ```

2. Edita tu `.env` con tus credenciales de base de datos:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_bd
    DB_USERNAME=usuario
    DB_PASSWORD=contraseña
    ```

3. Genera la clave de la aplicación:
    ```bash
    php artisan key:generate
    ```

---

## 🧱 Base de datos

1. Crea la base de datos vacía (si no existe).
2. Ejecuta migraciones:

    ```bash
    php artisan migrate
    ```

3. (Opcional) Crear datos de prueba:
    ```bash
    php artisan db:seed
    ```

---

## 🚀 Levantar la app

Desde el entorno local:

```bash
php artisan serve
```

Luego abre `http://127.0.0.1:8000/clientes` para empezar a gestionar clientes.

---

## 🧭 Estructura del proyecto

```
app/
  Http/
    Controllers/
      ClienteController.php  ← Lógica del CRUD
  Models/
    Cliente.php              ← Modelo Eloquent
database/
  migrations/               ← Definición de la tabla clientes
  seeders/                  ← Datos de prueba (si existen)
resources/
  views/
    clientes/
      index.blade.php       ← Listado de clientes
      create.blade.php      ← Formulario de creación
      edit.blade.php        ← Formulario de edición
      show.blade.php        ← Detalles de cliente
routes/web.php             ← Define `Route::resource('clientes', ...)`
```

---
