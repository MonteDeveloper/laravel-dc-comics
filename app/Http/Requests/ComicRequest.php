<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            "title" => "required",
            "description" => "nullable|min:5|max:65535",
            "thumb" => "nullable|url",
            "price" => "nullable|numeric|between:0.01,9999.99",
            "series" => "",
            "sale_date" => "nullable|date|max:10",
            "type" => "",
            "artists" => "nullable|max:65535|regex:/^([^,]+)(, ?[^,]+)*$/",
            "writers" => "nullable|max:65535|regex:/^([^,]+)(, ?[^,]+)*$/"
        ];
    }

    public function messages(){
        return [
            "title.required" => "Il 'Titolo' è obbligatorio",
            "description.min" => "La 'Descrizione' deve essere almeno di :min caratteri",
            "description.max" => "La 'Descrizione' deve essere al massimo di :max caratteri",
            "thumb.url" => "Il campo 'Immagine' deve essere un URL valido",
            "price.numeric" => "Il 'Prezzo' deve essere un numero",
            "price.between" => "Il 'Prezzo' deve essere compreso tra :min e :max",
            "sale_date.required" => "La 'Data' di vendita è obbligatoria",
            "sale_date.date" => "La 'Data' di vendita deve essere una data valida",
            "artists.required" => "Il campo 'Artisti' è obbligatorio",
            "artists.max" => "Il campo 'Artisti' deve essere al massimo di :max caratteri",
            "artists.regex" => "Il campo 'Artisti' deve essere una lista di nomi e cognomi separati da virgola",
            "writers.required" => "Il campo 'Scrittori' è obbligatorio",
            "writers.max" => "Il campo 'Scrittori' deve essere al massimo di :max caratteri",
            "writers.regex" => "Il campo 'Scrittori' deve essere una lista di nomi e cognomi separati da virgola"
        ];
    }
}
