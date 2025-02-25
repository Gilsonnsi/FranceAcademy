<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\RetirerEleveExamenRequest;


class RetirerEleveExamenRequest extends FormRequest
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
            'eleves' => 'required|array', 
            'eleves.*' => 'int|exists:eleves,id', 
            'examen_id' => 'int|required|exists:examens,id',
        ];
    }
}
