@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido a nuestra juguetería') }}</div>

                {{-- Insertar logo y centrar --}}
                <div class="card-body d-flex justify-content-center">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}

                    <img src="{{asset('/img/Logo.png')}} " alt="Logo" class="w-50">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
