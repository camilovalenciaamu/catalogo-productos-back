<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'  => 'required|string',
			'reference'  => 'required',
            'brand_image' => 'required|string',
        ];
    }

        public function messages()
    {
        return [
            'name.required' => 'El nombre de la marca es requerida',
            'name.string' => 'El nombre de la marca debe ser cadena de texto',

            'reference.required' => 'Digita la referencia de la marca',

            'brand_image.required' => 'La imagen de la marca es requerida',
            'brand_image.string' => 'Ingresa una url correcta',

        ];
    }
}