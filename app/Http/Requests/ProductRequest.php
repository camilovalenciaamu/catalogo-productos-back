<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'brand_id' => 'required|integer',
            'product_image' => 'required|string',
            'size' => 'required|string',
            'comments' => 'required|string',
            'boarding_date' => 'required|date',
            'quantity_stock' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'product_image.required' => 'La url de la imagen es requerida',
            'product_image.string' => 'Digita un url válida',

            'name.required' => 'El nombre del producto es requerido',
            'name.string' => 'El nombre debe ser cadena de texto',

            'brand_id.required' => 'Selecciona la marca del producto',
            'brand_id.string' => 'La marca debe ser una cadena de texto',

            'size.required' => 'Selecciona la talla del producto',
            'size.string' => 'La talla debe ser una cadena de texto',

            'comments.required' => 'Ingresa un comentario acerca del producto',
            'comments.string' => 'El comentario debe ser una cadena de texto',

            'boarding_date.required' => 'La fecha de embarque es requerida',
            'boarding_date.date' => 'Ingrese una fecha correcta',

            'quantity_stock.required' => 'Digita la cantidad en inventario',
            'quantity_stock.date' => 'La cantidad en inventario debe ser un número entero',
        ];
    }
}