<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\validation\Rule;
use  App\Tablas\ciudades;
class UpdateCiudad extends FormRequest
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
     * Get the validation rules that apply to the request..
     *
     * @return array
     */
    public function rules()
    {

        return [
           'name'=>[
                'required',
            Rule::unique('ciudades')->ignore($ciudades->id),
            ],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre de la ciudad es requerido',
            'name.unique' => 'El nombre de la ciudad debe ser unico'
        ];
    }

}
/* para el controlador ??
/*  $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        // Store the blog post...
    }
}
Validator::make($data, [
    'email' => [
        'required',
        Rule::unique('users')->ignore($user->id),
    ],
]);