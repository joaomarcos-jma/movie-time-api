<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'title' => 'required',
            'overview' => 'required',
            'runtime' => 'required',
            'logo_path' => 'required',
            'genre_id' => 'required',
            'streaming' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O campo titulo é obrigatório',
            'overview.required' => 'O campo sumário é obrigatório',
            'runtime.required' => 'O campo duração é obrigatório',
            'logo_path.required' => 'O campo imagem é obrigatório',
            'genre_id.required' => 'O campo gênero‎ é obrigatório',
            'streaming.required' => 'O campo streaming é obrigatório',
        ];
    }
}
