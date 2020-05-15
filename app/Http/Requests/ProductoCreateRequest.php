<?php

namespace App\Http\Requests;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class ProductoCreateRequest extends FormRequest
{
    use FailedValidation;
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
            'id_tienda' => 'required|integer',
            'nombre' => 'required|string|max:100|min:3',
            'precio' => 'required|digits_between:0,100.99',
            'stock' => 'required|integer'
        ];
    }
}
