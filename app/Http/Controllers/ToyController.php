<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToyRequest;
use Illuminate\Http\Request;
use App\Models\Toy; //agregar la ubicacion del modelo Toy para ser usado en este controlador
use Illuminate\Support\Facades\Storage;

class ToyController extends Controller
{
    //agregar los metodos del controlador

    // usar orm eloquent en index (tratar los registros como objetos) en lugar de querybuilder
    // index: listado de juguetes
    public function index(){
        // al hacer clic en menu catalogo, la ruta toyindex llama al controlador y 
        // el metodo index recupera los registros de bd y se los envia a la vista toyindex para ser mostrados al usuario
        // en el objeto toys conseguir (get) y guardar todos los registros de la bd en orden 
        // descendente para luego enviarlos a la vista toyIndex con compact
        $toys = Toy::orderByDesc('id')->get();
        return view('toyIndex', compact('toys'));
    }

    // metodo show mostrara el detalle de un solo juguete pasando a la vista
    // un objeto, es decir, un registro de la bd
    public function show(Toy $toy){
        // return $toy;
        return view('toyshow', compact('toy'));
    }

    // create retornara una vista para editar
    public function create(){
        return view('toycreate');
    }

    public function store(ToyRequest $request){
        // solo los datos validados del formulario se guardaran en la bd
        $toy=Toy::create($request->validated());

        $url = '';
        // si la request tiene una imagen ejecutar codigo
        if ($request->hasFile('img')){
            // el fichero request 'img' se guardara en la carpeta privada
            // storage 'public/toy' y su ruta se guardara en $url
            $url = Storage::url($request->file('img')->store('public/toy'));
        }

        // el atributo img de $toy sera igual a $url
        // es decir se agrega la url de la imagen en la bd
        $toy->img = $url;

        //guardar
        $toy->saveOrFail();

        //redirigir al listado (index) despues de guardar
        return redirect()->route('toyindex');

        // redirigir al articulo creado
        // return redirect()->route('toyshow', $toy);
        
    }

    public function edit(Toy $toy){
        return view('toyedit', compact('toy'));
    }

    public function update(ToyRequest $request, Toy $toy){
                // se pasa el array del request al método fill y este se encarga de actualizar
                // los campos permitidos en el registro de la bd
                $toy->fill($request->validated());

                $url = '';
                // si la request tiene una imagen ejecutar codigo
                if ($request->hasFile('img')){
                    // el fichero request 'img' se guardara en la carpeta privada
                    // storage 'public/toy' y su ruta se guardara en $url
                    $url = Storage::url($request->file('img')->store('public/toy'));
                }
        
                // el atributo img de $toy sera igual a $url
                // es decir se agrega la url de la imagen en la bd
                $toy->img = $url;
        
                //guardar
                $toy->saveOrFail();
        
                //redirigir al listado (index) despues de guardar
                return redirect()->route('toyindex');
    }

    public function destroy(Toy $toy){
        $toy->deleteOrFail();
        return redirect()->route('toyindex');
    }

}
