@extends('layouts.app')

@section('content')
    <div class="container">

        {{-- hacer listado de juguetes con foreach para mostrarlos en el sitio web 
    cuando se haga clic en menu catalogos --}}

        {{-- $toys es el objeto que contiene todos los registros de bd recuperados por
    el metodo index del controlador y enviado a esta vista, foreach recorre el objeto $toys
    y cada registro enconytrado se almacena en $toy para luego mostrarlo --}}

        <div class="row d-flex justify-content-between">

            {{-- @foreach ($collection as $item) --}}
            {{-- $toys=objeto recibido del controlador; $toy=es cada registro del objeto --}}

            @foreach ($toys as $toy)
                {{-- card de bootstrap para mostrar los juguetes en menu catalogo --}}
                <div class="card my-4 text-center" style="width: 18rem;">
                    <img class="card-img-top p-4" src="{{ $toy->img }} " alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $toy->title }} </h5>
                        <p class="card-text">{{ $toy->description }} </p>

                        {{-- isset comprueba si el registro $toy tiene el dato age, si lo consigue lo muestra --}}
                        @isset($toy->age)
                            <p class="card-text">Edad mínima recomendada: {{ $toy->age }} </p>
                        @endisset

                        <a href="{{ route('toyshow', $toy) }} " class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            @endforeach
        </div>

        
        {{-- solo los usuarios autenticados pueden agregar articulos --}}
        @auth
            <div class="d-flex justify-content-center mt-4">
                <a href="{{ route('toycreate') }} " class="btn btn-primary">Nuevo artículo</a>
            </div>
        @endauth


    </div>
@endsection
