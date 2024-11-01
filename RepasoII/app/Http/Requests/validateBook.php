<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateBook extends FormRequest
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
            'intISBN'=>'required|integer|min_digits:13',
            'txtTitulo'=>'required|string|max:150',
            'txtAutor'=>'required|string|max:150',
            'intPaginas'=>'required|integer|min:0',
            'intAnio'=>'required|integer|max_digits:4|min:1000|max:2024',
            'txtEditorial'=>'required|string|max:150',
            'txtCorreo'=>'required|email:rfc,dns'
        ];
    }
}
