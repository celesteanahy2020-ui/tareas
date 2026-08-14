<?php
include_once "../../controller/ControllerEmpleado.php";

$controller = new ControllerEmpleado();
$mensaje = $controller->guardar();

include_once "../header.php";
?>

<div class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow-md border border-gray-200">
    <h2 class="text-2xl font-bold text-slate-800 text-center mb-2">Agregar Empleado</h2>
    <p class="text-slate-500 text-sm text-center mb-6">Complete el formulario para agregar un nuevo empleado.</p>

    <?php if ($mensaje): ?>
        <div class="mb-4 p-3 rounded bg-blue-100 text-blue-800 text-sm text-center">
            <?php echo htmlspecialchars($mensaje); ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST" class="space-y-4">
        <div>
            <label class="block text-gray-700 text-sm font-semibold mb-1" for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
        </div>

        <div>
            <label class="block text-gray-700 text-sm font-semibold mb-1" for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
        </div>

        <div>
            <label class="block text-gray-700 text-sm font-semibold mb-1" for="email">Email:</label>
            <input type="email" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
        </div>

        <div>
            <label class="block text-gray-700 text-sm font-semibold mb-1" for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
        </div>

        <div class="pt-2">
            <button type="submit" class="bg-green-700 hover:bg-green-800 text-white px-5 py-2 rounded-md transition duration-200">
                Agregar Empleado
            </button>
        </div>
    </form>
</div>

<?php
include_once "../footer.php";
?>