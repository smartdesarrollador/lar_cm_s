<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Pagina extends Request
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
             "url" => "required",
                "descripcion"       =>      "required|min:5|max:500",
              
               /* "orden_menu"    =>    "required",
                "orden_submenu"       =>    "required", */
                
                "layout_id" => "required",
                "menu_id" => "required",
               

        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'El campo title es requerido!',
            'titulo.min' => 'El campo title no puede tener menos de 5 carácteres',
            'titulo.max' => 'El campo title no puede tener más de 45 carácteres',
            'url.required' => 'El campo url es requerido',
            'descripcion.required' => 'El campo body es requerido!',
            'descripcion.min' => 'El campo body no puede tener menos de 5 carácteres',
            'descripcion.max' => 'El campo body no puede tener más de 500 carácteres',
           
           /* 'oren_menu.required' => 'El campo orden_menu es requerido!',
            'oren_submenu.required' => 'El campo submenu es requerido', */
          
            'layout_id.required' => 'El Campo layout_id es requerido',
             'menu_id.required'=>'El campo menu_id es requerido',

        ];
    }
}
