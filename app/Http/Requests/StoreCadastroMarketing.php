<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCadastroMarketing extends FormRequest
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
            'name' => 'required',
            'email'=> 'required|email|unique:cadastro_marketing,email', // Validação para garantir que o email seja único
            'whatsapp'=> 'required',
            'cpf' =>'required',
            'anos_experiencia'=> 'required',
            'atuacao'=> 'required',
            'modalidade'=> 'required',
            'nota_fiscal'=> 'required',
            'mensagem'=> 'required',
        ];
    }
}
