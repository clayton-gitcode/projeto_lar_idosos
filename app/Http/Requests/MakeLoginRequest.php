<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * Handle Login Request
 * @property-read string $email
 * @property-read string $password
 */

class MakeLoginRequest extends FormRequest
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
            'email' => ['Required', 'email'],
            'password' => ['required'],
        ];
    }

    public function tryToLogin(): bool
    {
        /**
         * Tenta autenticar um usuário com base no e-mail e senha fornecidos.
         *
         * Procura um usuário pelo e-mail informado. Se encontrado, verifica se a senha fornecida corresponde
         * à senha armazenada no banco de dados utilizando hash seguro. Caso a autenticação seja bem-sucedida,
         * realiza o login do usuário na aplicação.
         *
         * @return bool Retorna true se o login for bem-sucedido, caso contrário retorna false.
         */
        if (
            $user = User::query()->where('email', '=', $this->email)
            ->first()
        ) {
            if (Hash::check($this->password, $user->password)) {
                auth()->guard()->login($user);
                // auth()->login($user);

                return true;
            }
        }

        return false;
    }
}
