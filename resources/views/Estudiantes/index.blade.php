<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Estudiantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-black-100">
                <body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Formulario de Registro de Estudiante</h1>
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('Estudiantes.index') }}" method="POST" class="bg-white p-8 shadow-lg rounded-lg">
            @csrf
            <fieldset class="mb-6">
                <legend class="text-xl font-semibold mb-4">Datos del Estudiante</legend>
                <label for="id_estudiante" class="block mb-2 font-medium">Id Estudiante:</label>
                <input type="number" id="id_estudiante" name="id_estudiante" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="1" maxlength="10">

                <label for="nombre" class="block mb-2 font-medium">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="2" maxlength="50">

                <label for="apellido" class="block mb-2 font-medium">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="2" maxlength="50">

                <label for="fecha_nacimiento" class="block mb-2 font-medium">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required>

                <label for="direccion" class="block mb-2 font-medium">Dirección:</label>
                <input type="text" id="direccion" name="direccion" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="5" maxlength="100">

                <label for="ciudad" class="block mb-2 font-medium">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="2" maxlength="50">

                <label for="nacionalidad" class="block mb-2 font-medium">Nacionalidad:</label>
                <input type="text" id="nacionalidad" name="nacionalidad" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="2" maxlength="50">

                <label for="celular" class="block mb-2 font-medium">Celular:</label>
                <input type="tel" id="celular" name="celular" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="10" maxlength="15">

                <label for="email" class="block mb-2 font-medium">Correo Electrónico:</label>
                <input type="email" id="email" name="email" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="5" maxlength="50">
            </fieldset>

            <fieldset class="mb-6">
                <legend class="text-xl font-semibold mb-4">Datos del Padre</legend>
                <label for="nombre_padre" class="block mb-2 font-medium">Nombre:</label>
                <input type="text" id="nombre_padre" name="nombre_padre" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="2" maxlength="50">

                <label for="direccion_padre" class="block mb-2 font-medium">Dirección:</label>
                <input type="text" id="direccion_padre" name="direccion_padre" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="5" maxlength="100">

                <label for="celular_padre" class="block mb-2 font-medium">Celular:</label>
                <input type="tel" id="celular_padre" name="celular_padre" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="10" maxlength="15">

                <label for="email_padre" class="block mb-2 font-medium">Correo Electrónico:</label>
                <input type="email" id="email_padre" name="email_padre" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="5" maxlength="50">
            </fieldset>

            <fieldset class="mb-6">
                <legend class="text-xl font-semibold mb-4">Datos de la Madre</legend>
                <label for="nombre_madre" class="block mb-2 font-medium">Nombre:</label>
                <input type="text" id="nombre_madre" name="nombre_madre" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="2" maxlength="50">

                <label for="direccion_madre" class="block mb-2 font-medium">Dirección:</label>
                <input type="text" id="direccion_madre" name="direccion_madre" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="5" maxlength="100">

                <label for="celular_madre" class="block mb-2 font-medium">Celular:</label>
                <input type="tel" id="celular_madre" name="celular_madre" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="10" maxlength="15">

                <label for="email_madre" class="block mb-2 font-medium">Correo Electrónico:</label>
                <input type="email" id="email_madre" name="email_madre" class="w-full p-2 mb-4 border border-gray-300 rounded bg-transparent focus:outline-none focus:border-blue-500" required minlength="5" maxlength="50">
            </fieldset>

            <input type="submit" value="Registrar" class="w-full bg-black-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
        </form>
    </div>
</body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>