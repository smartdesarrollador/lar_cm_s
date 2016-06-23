<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class General extends Request
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
            //
                "titulo"    =>    "required|min:5|max:45",
                "descripcion"       =>      "required|min:5|max:500",
                "correo"       =>      "required",
                "url"       =>      "required",
        ];
    }

     public function messages()
    {
        return [
            'titulo.required' => 'El campo title es requerido!',
            'titulo.min' => 'El campo title no puede tener menos de 5 carácteres',
            'titulo.min' => 'El campo title no puede tener más de 45 carácteres',
            'descripcion.required' => 'El campo body es requerido!',
            'descripcion.min' => 'El campo body no puede tener menos de 5 carácteres',
            'descripcion.min' => 'El campo body no puede tener más de 500 carácteres',
            'correo.required' => 'El campo title es requerido!',
            'url.required' => 'El campo title es requerido!',

        ];
    }
}
