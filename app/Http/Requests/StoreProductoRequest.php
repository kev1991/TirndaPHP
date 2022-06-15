<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeProductoRequest extends FormRequest
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
     //1.eestablecer reglas de validacion 
        return  [
            "nombre" => 'required|alpha|unique:productos,nombre',
            "desc"=> 'required|max:100',
            "precio"=> 'required|numeric|max:10000',
            "categoria" => 'required',
            "marca" =>  "required",
            'imagen' => 'required|image'
        
        ];
    }
    /**
     * mensajes personalizados
     */
    public function messages(){
        return[
            'required' =>'dato obligatorio',
            'alpha'=> 'solo letras',
            'max' => 'maximo:max caracteres',
            'numeric'=> 'solo numeros',
            'image'=> 'Solo archivos con formato jpeg, Jgp, Png, Gif o Pdf',
            'unique' => 'El nombre  ya existe',
        ];
    }
}
