<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * 
     */
    public function rules()
    {
        return [
            'title' => 'required|max:70',
            'description' => 'nullable|max:6000',
            'thumb' => 'nullable|url|max:300',
            'price' => 'required|numeric|between:0,99999',
            'series' => 'required|max:60',
            'sale_date' => 'required',
            'type' => 'required|max:60',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo deve essere lungo massimo 70 caratteri, non è un poema',
            'description.max' => 'La descrizione deve essere lunga al massimo 6000 caratteri (sono già tanti)',
            'thumb.url' => "L'url dell'immagine deve essere valida, esempio: http://www.miosito.com",
            'thumb.max' => "L'url dell'immagine deve avere al max 300 caratteri",
            'price.required' => 'Il prezzo deve essere inserito',
            'price.numeric' => 'Il valore inserito deve essere numerico',
            'price.between' => 'Il valore inserito deve essere compreso tra 0 e 99999',
            'series.required' => 'Campo richiesto',
            'series.max' => 'Il campo "serie" deve essere lungo al massimo 60 caratteri',
            'sale_date.required' => 'Data richiesta',
            'type.required' => 'Campo richiesto',
            'type.max' => 'Il campo "tipo" deve essere lung0 al massimo 60 caratteri'
        ];
    }
}
