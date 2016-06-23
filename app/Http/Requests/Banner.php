<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class Banner extends Request 
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
            
                "titulo"       =>      "required",
                "descripcion"       =>      "required",
                 "imagen" => 'mimes:jpeg,jpg,png,gif',
                "url"       =>      "required",
                "ancho"       =>      "required",
                "altura"       =>      "required",
                "formato" => "required",

        ];
    }

    public function messages()
    {
        return [
        'titulo.required' => 'El campo titulo es requerido!',
            
            'descripcion.required' => 'El campo descripcion es requerido!',
             'imagen.mimes' => 'formato invalido en el campo file',
            
            'url.required' => 'El campo url es requerido!',
            
            'ancho.required' => 'El campo ancho es requerido!',

            'altura.required' => 'El campo altura es requerido!',
           
            'formato.required' => 'El campo formato es requerido!',
            

        ];
    }
}
