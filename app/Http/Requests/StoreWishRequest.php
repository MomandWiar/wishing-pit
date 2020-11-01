<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreWishRequest
 * @package App\Http\Requests
 */
class StoreWishRequest extends FormRequest
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
            'naam'          => 'required|max:50',
            'beschrijving'  => 'required|max:100',
            'plaatje'       => 'required|file|image|max:5000',
            'link'          => 'required|string',
            'prijs'         => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
        ];
    }
    /**
     * Custom error messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'prijs.regex'   => 'Prijs mag alles cijfers en komma bevatten'
        ];
    }
}
