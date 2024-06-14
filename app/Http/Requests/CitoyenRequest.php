<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitoyenRequest extends FormRequest
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
            'nomCitoyen' => ['required'],
            'prenomCitoyen'=> ['required'],
            'email'=> ['required'],
            'numCIN'=> ['required','unique','numeric'],
            'telephone'=> ['required','numeric','max:15'],
            'adresse'=> ['required']
        ];
    }
}
