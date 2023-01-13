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
            'title' => 'required|max:60|min:2',
            'description' => 'required|max:65535|min:2',
            'thumb' => 'required|max:255|min:2',
            'price' => 'required|decimal:2',
            'series' => 'required|max:60|min:2',
            'sale_date' => 'required|date',
            'type' => 'required|max:40|min:2'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.max' => 'Il titolo deve avere al massimo :max caratteri',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'description.required' => 'La descrizione è un campo obbligatorio',
            'description.max' => 'La descrizione deve avere al massimo :max caratteri',
            'description.min' => 'La descrizione deve avere almeno :min caratteri',
            'thumb.required' => 'La thumb è un campo obbligatorio',
            'thumb.max' => 'La thumb deve avere al massimo :max caratteri',
            'thumb.min' => 'La thumb deve avere almeno :min caratteri',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'price.decimal' => 'Il prezzo deve avere :decimal cifre dopo la virgola',
            'series.required' => 'La serie è un campo obbligatorio',
            'series.max' => 'La serie deve avere al massimo :max caratteri',
            'series.min' => 'La serie deve avere almeno :min caratteri',
            'sale_date.required' => 'La data di vendita è un campo obbligatorio',
            'sale_date.date' => 'La data di vendita deve essere una data',
            'type.required' => 'Il tipo di fumetto è un campo obbligatorio',
            'type.max' => 'Il tipo di fumetto deve avere al massimo :max caratteri',
            'type.min' => 'Il tipo di fumetto deve avere almeno :min caratteri',
        ];
    }
}
