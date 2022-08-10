<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Oficio extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'folio' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'noOficio' => 'required',
            'dependencia' => 'required',
            'remitente' => 'required',
            'asunto' => 'required',
            'telefono' => 'required',
            'observacion' => 'required',
            'recibe' => 'required'
        ];
    }
}
