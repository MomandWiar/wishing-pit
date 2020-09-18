<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//TODO fix naming: ModelNaamManerRequest -> WishStoreRequest
/*
 * Ashua from the watertribe ~ [ Check ]
 * please remove this comment..
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
        // TODO fix spacing
        // 'a'      => 'a|b|c',
        // 'aaaaaa' => 'a|b|c',
        /*
         * Ashua from the watertribe ~ [ Check ]
         * please remove this comment..
         */
        return [
            'naam'          => 'required|max:50',
            'beschrijving'  => 'required|max:100',
            'plaatje'       => 'required|file|image|max:5000',
            'prijs'         =>'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/'
        ];
    }

    // TODO REMOVE THIS BOIY!!!!!!!!! check resource/lang/validation.php
    /*
     * Ashua from the watertribe ~ [ Check ]
     * please remove this comment..
     */

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
