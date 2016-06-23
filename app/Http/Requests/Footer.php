<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Footer extends Request
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
                "url"    =>    "required",
                "descripcion"       =>      "required|min:5|max:500",
                "periodo"       =>      "required",
               
        ];
    }

     public function messages()
    {
        return [
            'url.required' => 'El campo url es requerido!',
            
            'descripcion.required' => 'El campo body es requerido!',
            'descripcion.min' => 'El campo body no puede tener menos de 5 carácteres',
            'descripcion.min' => 'El campo body no puede tener más de 500 carácteres',
            'periodo.required' => 'El campo title es requerido!',
            

        ];
    }
}
