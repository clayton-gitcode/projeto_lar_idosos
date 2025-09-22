<x-layout.app>
    <div class="mx-auto max-w-7xl p-4 sm:p-6 lg:p-8">

        {{-- Cabeçalho da página de resultados --}}
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-base-content">Resultados da Busca</h1>
                {{-- Mostra para o usuário o que ele buscou --}}
                @if ($search_bar)
                    <p class="mt-1 text-base-content/70">
                        Exibindo resultados para: <span class="font-semibold">"{{ $search_bar }}"</span>
                    </p>
                @endif
            </div>
            {{-- Botão para voltar para a lista completa --}}
            <a href="{{ route('dashboard') }}" class="btn btn-ghost">
                <x-icons.arrow-left />
                Voltar para a Lista
            </a>
        </div>

        {{-- Container da Tabela para permitir scroll horizontal em telas pequenas --}}
        <div class="overflow-x-auto rounded-lg border border-base-300 bg-base-100">
            <table class="table w-full table-zebra">
                {{-- Cabeçalho da Tabela --}}
                <thead class="bg-base-200 text-base-content">
                    <tr>
                        <th class="p-4">Nome</th>
                        {{-- <th class="p-4">CPF</th> --}}
                        <th class="p-4">Responsável</th>
                        <th class="p-4">Telefone</th>
                        <th class="p-4 text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)
                        <tr class="hover">
                            <td class="p-4">{{ $paciente->name }}</td>
                            {{-- <td class="p-4">{{ $paciente->cpf }}</td> --}}
                            <td class="p-4">{{ $paciente->responsavel }}</td>
                            <td class="p-4">{{ $paciente->telefone_resp }}</td>
                            <td class="p-4">
                                {{-- Container Flex para alinhar os botões de ação --}}
                                <div class="flex items-center justify-center gap-2">
                                    {{-- Botão Imprimir --}}
                                    <a href="{{ route('pacientes.imprimir', $paciente) }}"
                                        class="btn btn-ghost btn-sm btn-square" title="Imprimir">
                                        {{-- resources/views/components/icons/imprimir.blade.php --}}
                                        <x-icons.imprimir/>
                                    </a>

                                    {{-- Botão Editar --}}
                                    <a href="{{ route('pacientes.edit', $paciente) }}"
                                        class="btn btn-ghost btn-sm btn-square" title="Editar">
                                        {{-- resources/views/components/icons/edit.blade.php --}}
                                        <x-icons.edit/>
                                    </a>

                                    {{-- Botão Excluir --}}
                                    <form action="{{ route('pacientes.destroy', $paciente) }}" method="post"
                                        onsubmit="return confirm('Tem certeza que deseja excluir este paciente?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-ghost btn-sm btn-square text-error hover:bg-error hover:text-error-content"
                                            title="Excluir">
                                            {{-- resources/views/components/icons/delete.blade.php --}}
                                            <x-icons.delete/>   
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        {{-- Mensagem para quando não houver pacientes --}}
                        <tr>
                            <td colspan="6" class="p-4 text-center text-base-content/70">
                                Nenhum paciente encontrado com o termo <strong>{{ $search_bar }}</strong>.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout.app>