<?php

namespace siscontable\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosFormRequest extends FormRequest
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
            'nombre_usuario'=>'required|max:50',
            'contraseña'=>'required|max:20',
        ];
    }
}
