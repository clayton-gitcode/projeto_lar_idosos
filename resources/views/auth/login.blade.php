<x-layout.app>
    <x-login.container>
        <x-login.card>
            <x-login.form :route="route('login')" post id="login-form">
                <x-login.input title="Email" name="email" placeholder="seu@email.com" value="{{ old('email') }}"/>
                <x-login.input title="Senha" type="password" name="password" placeholder="Sua senha" />
            </x-login.form>

            {{-- slot com nome --}}
            <x-slot:actions>
                <x-login.button form="login-form">Entrar</x-button>
            </x-slot:actions>
        </x-login.card>
    </x-login.container>
</x-layout.app>