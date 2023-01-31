@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row d-flex justify-content-center">

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

                <a href="#" class="btn btn-primary">Editar</a>
            </div>
        </div>

        </div>
        

    </div>
@endsection
