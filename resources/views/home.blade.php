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

                        <img src="{{ asset('/img/Logo.png')}}" alt="Logo" class="w-50">
                    </div>

                    <div class="d-flex flex-wrap m-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui magni facilis, libero praesentium
                            cumque illo quis sint nam voluptates odit vel eveniet tenetur porro earum voluptatum nulla
                            fugiat?
                            Recusandae, excepturi?</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum dolor nisi quis. Officia alias
                            velit nostrum quisquam natus. Quia optio error, consectetur itaque similique mollitia aperiam
                            harum facere sunt fugit!</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo beatae eum modi ad nihil qui
                            repellat quo, similique dolorum doloribus assumenda eligendi sunt minus earum officiis?
                            Aperiam minima expedita quos.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- carousel --}}
    <div id="carouselExampleSlidesOnly" class="carousel slide container" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://img.freepik.com/vector-premium/ninos-felices-dibujos-animados-jugando-parque_18591-61445.jpg" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://elcorreoweb.es/binrepository/ninos-coronavirus-juegos_20386379_20200313115658.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://pediatriayfamilia.com/wp-content/uploads/2020/04/aprende-jugando-1200x900.jpg"
                    class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
@endsection







{{-- @extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    <div class="container my-2">
        <h2>Bienvenido a la pagina principal</h2>
        <div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, facere quibusdam voluptatibus quaerat
                commodi explicabo ea animi nulla distinctio nisi. Doloremque necessitatibus dicta repellat officia animi
                beatae delectus quis molestias.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia voluptatum beatae nobis molestiae omnis
                fugiat architecto pariatur dolor quae. Rerum expedita nihil deleniti quae eum voluptatem qui nostrum. Velit,
                eius.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quaerat cupiditate sapiente aperiam optio,
                tempora quibusdam nesciunt dolores sunt velit debitis inventore similique possimus consequatur nemo alias,
                culpa illo recusandae!
            </p>
        </div>
    </div>

    <div id="carouselExampleSlidesOnly" class="carousel slide container" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://app.sindicatoupm.es/wp-content/uploads/2021/02/cursos-64.jpg" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www3.ubu.es/ubucevblog/wp-content/uploads/2019/10/elearning.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://revistadiners.com.co/wp-content/uploads/2016/01/mooc_800x669.jpg"
                    class="d-block w-100" alt="...">
            </div>
        </div>
    </div>


@endsection --}}


{{-- class HomeController extends Controller
{
    public function __invoke()
    {
        //return view('welcome');
        return view('home');
    }
} --}}