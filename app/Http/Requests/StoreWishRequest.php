<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeWishRequest extends FormRequest
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
            'naam' => 'required|max:50',
            'beschrijving' => 'required|max:100',
            'plaatje' => 'required|file|image|max:5000',
            'prijs' =>'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/'
        ];
    }

    public function messages()
    {
        return [
            'naam.required' => 'Naam ontbreekt.',
            'beschrijving.required' => 'Beschrijving is niet ingevuld.',
            'plaatje.file' => 'Plaatje is niet correct.',
            'plaatje.required' => 'Plaatje is verplicht.',
            'prijs.required' => 'Prijs is niet ingevuld',
            'prijs.regex:/^[0-9]+(\.[0-9][0-9]?)?$/' => 'Prijs mag alles cijfers en komma bevatten'
        ];
    }
}
