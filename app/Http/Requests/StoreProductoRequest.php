<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
             //1. establecer reglas de validación
             return [
                "nombre" => 'required|alpha',
                "desc" => 'required|max:100',
                "precio" => 'required|numeric:10000',
                "categoria" => 'required',
                "marca" => 'required'
                ];
    
    }

    /**
     * Mensajes personalizados
     */
    public function messages(){
        return[
                'required' => 'dato obligatorio',
                'alpha' => 'solo letras',
                'max' => 'max :maxartisan  caracteres',
                'numeric' => 'Solo números'
        ];
    }
}
