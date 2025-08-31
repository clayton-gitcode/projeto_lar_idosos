<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeLoginRequest;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    /**
     * Realiza o processo de login do usuário.
     *
     * Este método recebe uma requisição do tipo MakeLoginRequest, tenta autenticar o usuário
     * utilizando o método tryToLogin(). Caso a autenticação seja bem-sucedida, redireciona
     * para o dashboard. Caso contrário, retorna para a página anterior com uma mensagem de erro.
     *
     * @param  MakeLoginRequest  $request  Requisição contendo os dados de login do usuário.
     * @return \Illuminate\Http\RedirectResponse  Redireciona para o dashboard ou retorna para a página anterior com mensagem de erro.
     */
    public function login(MakeLoginRequest $request){

        if($request->tryToLogin()){
            return to_route('dashboard');
        }

        return back()->with(['message' => 'Dados inválidos !']);
    }
}
