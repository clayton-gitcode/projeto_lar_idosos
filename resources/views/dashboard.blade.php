<x-layout.app>
    <div class="mx-auto max-w-7xl p-4 sm:p-6 lg:p-8">
        {{-- Cabeçalho da Página --}}
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-base-content">Dashboard</h1>
            <p class="text-base-content/70">Selecione uma das opções abaixo para começar.</p>
        </div>

        {{-- Mensagem de Feedback --}}
        @if($message = session()->get('message'))
        <div role="alert" class="alert alert-info mb-6 shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 w-6 shrink-0 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span>{{ $message }}</span>
        </div>
        @endif
    
        {{-- Menu de Navegação em Grid de Cards --}}
        <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

            {{-- Card: Cadastrar Pacientes --}}
            <li class="list-none">
                <a href="{{ route('pacientes.create') }}" class="card bg-base-100 shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="card-body">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                {{-- Ícone SVG --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="card-title">Cadastrar Pacientes</h2>
                                <p class="text-sm text-base-content/60">Adicionar um novo paciente ao sistema.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </li>

            {{-- Card: Listar Pacientes --}}
            <li class="list-none">
                <a href="{{ route('pacientes.list') }}" class="card bg-base-100 shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="card-body">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                {{-- Ícone SVG --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="card-title">Listar Pacientes</h2>
                                <p class="text-sm text-base-content/60">Visualizar e gerenciar pacientes existentes.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </li>

            {{-- Futuros cards podem ser adicionados aqui --}}

        </ul>
    </div>
</x-layout.app>