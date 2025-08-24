<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRegisterRequest extends FormRequest
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
            'nome' => ['required', 'string', 'max:255'],
            'birth_date' => ['nullable', 'date'],
            'rg' => ['nullable', 'string', 'max:20'],
            'cpf' => ['required', 'string', 'max:14', 'unique:pacientes,cpf'],
            'sus' => ['nullable', 'string', 'max:15'],
            'responsavel' => ['nullable', 'string', 'max:255'],
            'doc_resp' => ['nullable', 'string', 'max:20'],
            'telefone_resp' => ['nullable', 'string', 'max:20'],
            'bairro' => ['nullable', 'string', 'max:100'],
            'tipo_beneficio' => ['nullable', 'string', 'max:50'],
            'valor_mensal' => ['nullable', 'numeric', 'min:0'],
            'data_reg_ps' => ['nullable', 'date'],
            'obs' => ['nullable', 'string'],
        ];
    }
}
