<x-layout.app>
    <div class="mx-auto max-w-7xl p-4 sm:p-6 lg:p-8">

        {{-- Botão Sair --}}
        <div class="mb-2 flex flex-col items-end justify-end gap-4 sm:flex-row sm:items-center">
            <a href="{{ route('logout') }}" class="btn btn-default">
                {{-- resources/views/components/icons/arrow-left.blade.php --}}
                <x-icons.exit/>
                SAIR
            </a>
        </div>


        {{-- Cabeçalho da Página --}}
        <div class="mb-2">
            <h1 class="text-4xl font-bold text-base-content">Dashboard</h1>
            <p class="text-base-content/70">Selecione uma das opções abaixo para começar.</p>
        </div>

        {{-- barra de pesquisa --}}
        <div class="mb-8">
            <div class="card-body">
            <x-login.form :route="route('pacientes.search')">
                <div class="input-group w-full max-w-sm flex flex-nowrap gap-1">
                    <input type="text" placeholder="Pesquisar Paciente por nome ..." name="search_bar" class="input input-bordered input-primary"/>
                    <button class="btn btn-primary" type="submit"><x-icons.search/></button>
                </div>
            </x-login.form>
        </div>

        {{-- Menu de Navegação em Grid de Cards --}}
        <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2">

            {{-- Card: Cadastrar Pacientes --}}
            <li class="list-none">
                <x-link.link_dashboard :route="route('pacientes.create')"
                     :title="'Cadastrar Pacientes'"
                     :description="'Adicionar um novo paciente ao sistema.'">

                     <x-slot name="icon">
                        <x-icons.create_paciente/>
                     </x-slot>
                </x-link.link_dashboard>
            </li>

            {{-- Card: Listar Pacientes --}}
            <li class="list-none">
                <x-link.link_dashboard :route="route('pacientes.list')"
                     :title="'Listar Pacientes'"
                     :description="'Visualizar e gerenciar pacientes existentes.'">

                     <x-slot name="icon">
                        <x-icons.list_paciente/>
                     </x-slot>
                </x-link.link_dashboard>
            </li>

            {{-- Futuros cards podem ser adicionados aqui --}}

        </ul>
    </div>
</x-layout.app>
