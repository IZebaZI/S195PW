<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateClient extends FormRequest
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
        if ($this->route('id') == null){
            return [
                'txtnombre'=>'required|min:3|max:20',
                'txtapellido'=>'required',
                'txtcorreo'=>'required|email:rfc,dns',
                'txttelefono'=>'required|numeric'
            ];
        } else{
            $id = $this->route('id');
            return [
                'txtnombre'.$id=>'required|min:3|max:20',
                'txtapellido'.$id=>'required',
                'txtcorreo'.$id=>'required|email:rfc,dns',
                'txttelefono'.$id=>'required|numeric'
            ];
        }
    }
}
