<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    /**
     * Executa ações durante o boot do provedor de serviços da aplicação.
     *
     * Neste caso, 'Model::unguard();' desabilita a proteção de atribuição em massa para todos os modelos Eloquent,
     * permitindo que todos os atributos sejam atribuídos em massa.
     *
     * Aviso: Usar Model::unguard() pode representar riscos de segurança, pois permite a atribuição de qualquer campo do modelo sem restrições. Utilize com cautela.
     * 
     * Faça a validação dos campos no Request para controle do cadastro.
     * @return void
     */
    public function boot(): void
    {
        // Model::unguard();
    }
}
