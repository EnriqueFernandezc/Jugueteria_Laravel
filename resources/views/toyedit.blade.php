@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{route('toyupdate', $toy)}} " method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group my-4">
                <label for="title" class="form-label">Nombre del artículo</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Ingrese nombre del artículo" value="{{$toy->title}}">
            </div>

            <div class="form-group my-4">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">value="{{$toy->description}}"</textarea>
            </div>

            <div class="form-group my-4">
                <label for="age" class="form-label">Edad recomendada</label>
                <input type="number" name="age" class="form-control" id="age" placeholder="Ingrese la edad" value="{{$toy->age}}">
            </div>

            <div class="form-group my-4">
                <label for="img" class="form-label">Imagen</label>
                <input type="file" name="img" class="form-control" id="img">
            </div>

            <div class="form-group my-4">
                <label for="img" class="form-label">Imagen actual</label>
                <img src="{{$toy->img}}" class="w-25" alt="Juguete">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>


        </form>

    </div>
@endsection
