<x-layout.app>
    <div class="mx-auto max-w-7xl p-4 sm:p-6 lg:p-8">

        {{-- Cabeçalho com Título e Botão Voltar --}}
        <div class="mb-6 flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-center">
            <div>
                <h1 class="text-3xl font-bold text-base-content">Lista de Pacientes</h1>
                <p class="mt-1 text-base-content/70">Gerencie os pacientes cadastrados no sistema.</p>
            </div>
            <a href="{{ route('dashboard') }}" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Voltar
            </a>
        </div>

        {{-- Container da Tabela para permitir scroll horizontal em telas pequenas --}}
        <div class="overflow-x-auto rounded-lg border border-base-300 bg-base-100">
            <table class="table w-full table-zebra">
                {{-- Cabeçalho da Tabela --}}
                <thead class="bg-base-200 text-base-content">
                    <tr>
                        <th class="p-4">Nome</th>
                        <th class="p-4">CPF</th>
                        <th class="p-4">Responsável</th>
                        <th class="p-4">Telefone</th>
                        <th class="p-4 text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr class="hover">
                            <td class="p-4">{{ $paciente->name }}</td>
                            <td class="p-4">{{ $paciente->cpf }}</td>
                            <td class="p-4">{{ $paciente->responsavel }}</td>
                            <td class="p-4">{{ $paciente->telefone_resp }}</td>
                            <td class="p-4">
                                {{-- Container Flex para alinhar os botões de ação --}}
                                <div class="flex items-center justify-center gap-2">
                                    {{-- Botão Imprimir --}}
                                    <a href="{{ route('pacientes.imprimir', $paciente) }}"
                                        class="btn btn-ghost btn-sm btn-square" title="Imprimir">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                        </svg>
                                    </a>

                                    {{-- Botão Editar --}}
                                    <a href="{{ route('pacientes.edit', $paciente) }}"
                                        class="btn btn-ghost btn-sm btn-square" title="Editar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.5L15.232 5.232z" />
                                        </svg>
                                    </a>

                                    {{-- Botão Excluir --}}
                                    <form action="{{ route('pacientes.destroy', $paciente) }}" method="post"
                                        onsubmit="return confirm('Tem certeza que deseja excluir este paciente?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-ghost btn-sm btn-square text-error hover:bg-error hover:text-error-content"
                                            title="Excluir">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        {{-- Mensagem para quando não houver pacientes --}}
                        <tr>
                            <td colspan="6" class="p-4 text-center text-base-content/70">
                                Nenhum paciente encontrado.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            <div>{{ $pacientes->links() }}</div>
        </div>
    </div>
</x-layout.app>
