<x-layout.app>
    {{-- Container principal para centralizar o card na tela --}}
    <div class="flex min-h-full flex-col items-center justify-center px-6 py-12 lg:px-8">

        <div class="card w-full max-w-md bg-base-100 shadow-xl">
            <div class="card-body">

                {{-- Título --}}
                <h1 class="card-title my-4 justify-center text-3xl font-bold">
                    Login
                </h1>

                {{-- Mensagem de Sessão (Ex: "Logout efetuado com sucesso") --}}
                @if ($message = session()->get('message'))
                <div role="alert" class="alert alert-success mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>{{ $message }}</span>
                </div>
                @endif

                <form action="{{ route('login') }}" method="POST" class="space-y-4">
                    @csrf

                    {{-- Campo de Email --}}
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input
                            type="email"
                            name="email"
                            placeholder="seu@email.com"
                            value="{{ old('email') }}"
                            class="input input-bordered w-full @error('email') input-error @enderror"
                        />
                        @error('email')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    {{-- Campo de Senha --}}
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Senha</span>
                        </label>
                        <input
                            type="password"
                            name="password"
                            placeholder="Sua senha"
                            class="input input-bordered w-full @error('password') input-error @enderror"
                        />
                        @error('password')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    {{-- Botão de Login --}}
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Entrar</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</x-layout.app>