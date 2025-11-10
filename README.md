# Proyecto "menus" - Actividad Laravel Blade

Este proyecto es una actividad para demostrar el uso del sistema de plantillas Blade de Laravel.

## Objetivo
El objetivo es crear un proyecto web simple que utilice una vista principal (layout) y vistas secundarias que hereden de ella. El sistema debe incluir un menú de navegación que resalte la sección activa actual.

## Características
* **Vista Principal (Layout):** Se encuentra en `resources/views/layouts/app.blade.php`. Contiene la estructura HTML base, el menú de navegación y el footer.
* **Vistas Secundarias:** Se crearon 3 vistas: `inicio.blade.php`, `fotos.blade.php` y `contacto.blade.php`.
* **Herencia de Blade:** Cada vista secundaria usa `@extends` para heredar del layout principal y `@section` para definir su contenido único.
* **Menú Activo:** El menú en el layout principal utiliza la función `request()->is()` de Laravel para aplicar una clase CSS (`.activo`) al enlace de la página actual.
* **Footer:** El pie de página con la información del autor está incluido en el layout principal, por lo que aparece en todas las páginas.
* **Rutas y Controlador:** Se utiliza un `PageController` para gestionar la lógica de qué vista mostrar para cada ruta definida en `routes/web.php`.# activity11
