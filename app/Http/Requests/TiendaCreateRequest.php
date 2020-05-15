<?php

namespace App\Http\Requests;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class TiendaCreateRequest extends FormRequest
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
            'nombre' => 'required|min:3|max:100|unique:App\Models\Tienda,nombre',
            'direccion' => 'required|min:3|max:150'
        ];
    }

    public function filters() {
        return [
            'nombre' => 'trim|capitalize|espace'
        ];
    }
}
