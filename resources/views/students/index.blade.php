<x-app-layout>
<x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Alumnos
        </h2>
        <div class="flex flex-wrap px-8 -mx-2 overflow-hidden lg:px-0 sm:px-0 xl:px-0">
            <div class="flex px-2 my-2 overflow-hidden">
<a href="{{ route('students.create') }}">Crear</a>

            </div>
        </div>
    </x-slot>

</x-app-layout>