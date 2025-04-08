<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:10'],
            'description' => ['required', 'max:50']
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Title Kosong bro',
            'title.max' => ' Title Kepanjangan cuy',
            'description.required' => 'Description Kosong bro',
            'description.max' => 'Description Kepanjangan cuy'
        ];
    }
}
