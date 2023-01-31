<?php

namespace App\Http\Requests;

use Hamcrest\Description;
use Illuminate\Foundation\Http\FormRequest;

class ToyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        // cambiar a true para que el usuario este autorizado en fase desarrollo
        return true;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // se aplican las reglas de validacion del formulario de vista toycreate
        return [
            'title' => 'required',
            'description' => 'required'
        ];
    }
}
