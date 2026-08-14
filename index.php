<?php
include_once "config/conexion.php";
include_once "views/header.php";
?>

<section class="max-w-4xl mx-auto text-center">
    <div class="bg-white p-8 rounded-lg shadow-md mb-10 border border-gray-200">
        <div class="flex justify-center mb-4 text-cyan-600">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
            </svg>
        </div>
        <h2 class="text-2xl font-bold text-slate-800 mb-2">Bienvenido al CRUD de Tareas</h2>
        <p class="text-slate-500">Proyecto de gestión de tareas y conexiones a bases de datos.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="views/empleados/agregar.php" class="bg-white p-6 rounded-lg shadow border border-gray-200 hover:shadow-lg transition duration-200 block">
            <h3 class="font-bold text-green-700 text-xl mb-2">Crear</h3>
            <p class="text-gray-600 text-sm">Agregar empleado</p>
        </a>

        <div class="bg-white p-6 rounded-lg shadow border border-gray-200">
            <h3 class="font-bold text-green-700 text-xl mb-2">Consultar</h3>
            <p class="text-gray-600 text-sm">Visualiza todas tus tareas.</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow border border-gray-200">
            <h3 class="font-bold text-green-700 text-xl mb-2">Gestionar</h3>
            <p class="text-gray-600 text-sm">Organiza y administra tus registros.</p>
        </div>
    </div>
</section>

<?php
include_once "views/footer.php";
?>