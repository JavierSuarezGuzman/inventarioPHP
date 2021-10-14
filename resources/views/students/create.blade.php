<x-app-layout>
<x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Crear alumno
        </h2>
        <div class="flex flex-wrap px-8 -mx-2 overflow-hidden lg:px-0 sm:px-0 xl:px-0">
            <div class="flex px-2 my-2 overflow-hidden">
            
            {!! Form::open(['route' => 'students.store']) !!}

            {{Form::label('rut', 'RUT:')}}
            {{Form::text('rut')}}
            <br>
            {{Form::label('username', 'Nombre:')}}
            {{Form::text('username')}}
            <br>
            {{Form::label('apellidos', 'Apellidos:')}}
            {{Form::text('apellidos')}}
            <br>
            {{Form::label('correo', 'Correo electrónico:')}}
            {{Form::text('correo')}}
            <br>
            {{Form::label('sucursales', 'Seleccione sucursal:')}}
            {{Form::select('sucursales', ['1' => 'Sucursal norte', '2' => 'Sucursal centro', '3' => 'Sucursal sur'])}}
            <br>
            {{Form::submit('Crear alumno')}}
            
            {!! Form::close() !!}

            </div>
        </div>
    </x-slot>

</x-app-layout>