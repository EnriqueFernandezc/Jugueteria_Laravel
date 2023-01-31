<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy; //agregar la ubicacion del modelo Toy para ser usado en este controlador

class ToyController extends Controller
{
    //agregar los metodos del controlador

    // usar orm eloquent en index (tratar los registros como objetos) en lugar de querybuilder
    // index: listado de juguetes
    public function index(){
        // al hacer clic en menu catalogo, la ruta toyindex llama al controlador y el metodo index recupera los registros de bd y se los envia a la vista toyindex para ser mostrados al usuario
        //en el objeto toys conseguir (get) y guardar todos los registros de la bd en orden descendente para luego enviarlos a la vista toyIndex con compact
        $toys = Toy::orderByDesc('id')->get();
        return view('toyIndex', compact('toys'));
    }

    // metodo show mostrara el detalle de un solo juguete pasando el objeto a la vista
    public function show(Toy $toy){
        return view('toyshow', compact('toy'));
    }

    public function create(){}

    public function store(){}

    public function edit(){}

    public function update(){}

    public function destroy(){}

}
