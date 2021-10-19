<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:10',
            'descripcion' => 'required',
            'categoria' => 'required'
        ];
    }

    /*
    // funcion para personalizar mejor los atributus de los campos
    public function attributes()
    {
      //  return ['name' => 'nombre del curso'];
    }

    // esta funcion es para personalizar el mensaje
    public function messages()
    {
        // return['name.required' => 'mesnaje'];
    }
    */
}
