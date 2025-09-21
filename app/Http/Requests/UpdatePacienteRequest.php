<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;
use Illuminate\Validation\Rule;
/**
 * @property-read UploadedFile $photo
 */

class UpdatePacienteRequest extends FormRequest
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
        // Captura o ID do paciente que está sendo atualizado a partir da rota
        $pacienteId = $this->route('paciente')->id;
        // dd($pacienteId);
        return [
            'name' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'date'],
            'rg' => ['nullable', 'string', 'max:20'],
            'sexo'=>['required','in:M,F'],
            // Forma correta de validar um campo único durante um update
            'cpf' => [
                'required',
                'string',
                'max:11',
                Rule::unique('pacientes', 'cpf')->ignore($pacienteId),
            ],
            'sus' => ['nullable', 'string', 'max:20'],
            'responsavel' => ['nullable', 'string', 'max:50'],
            'doc_resp' => ['nullable', 'string', 'max:20'],
            'telefone_resp' => ['nullable', 'string', 'max:20'],
            'banco' => ['nullable', 'string', 'max:20'],
            'tipo_beneficio' => ['nullable', 'string', 'max:50'],
            'valor_mensal' => ['nullable', 'numeric', 'min:0'],
            'data_recebimento' => ['nullable', 'date'],
            'obs' => ['nullable', 'string','max:255'],
            'photo'=>['nullable', 'image'],
        ];
    }
}
