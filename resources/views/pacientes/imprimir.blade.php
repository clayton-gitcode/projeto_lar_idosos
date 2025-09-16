<x-layout.app>
    <div class="mx-auto max-w-4xl p-4 sm:p-6 lg:p-8">

        {{-- Cabeçalho com ações - ESTA SEÇÃO NÃO SERÁ IMPRESSA --}}
        <div class="mb-6 flex items-center justify-between print:hidden">
            <a href="{{ route('pacientes.list') }}" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Voltar para a Lista
            </a>
            <button onclick="window.print()" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                </svg>
                Imprimir Ficha
            </button>
        </div>

        {{-- Conteúdo da Ficha - ESTA SEÇÃO SERÁ IMPRESSA --}}
        <div class="rounded-lg border border-base-300 bg-base-100 p-8 print:border-0 print:shadow-none">

            {{-- Cabeçalho da Ficha com Foto e Nome --}}
            <div class="flex flex-col items-center gap-6 sm:flex-row">
                <div class="avatar">
                    <div class="w-28 rounded-full ring ring-primary ring-offset-2 ring-offset-base-100">
                         @if ($paciente->photo)
                            <img src="/storage/{{ $paciente->photo }}" alt="Foto do Paciente">
                        @else
                            <img src="/storage/photos/avatar.png" alt="Avatar Padrão">
                        @endif
                    </div>
                </div>
                <div class="text-center sm:text-left">
                    <h1 class="text-3xl font-bold">{{ $paciente->name }}</h1>
                    <p class="text-base-content/70">CPF: {{ $paciente->cpf }}</p>
                </div>
            </div>

            <div class="divider"></div>

            {{-- Grid com os detalhes do paciente --}}
            <div class="grid grid-cols-1 gap-x-8 gap-y-4 text-base sm:grid-cols-2 lg:grid-cols-3">
                
                {{-- Helper function para evitar repetição --}}
                @php
                    function display_field($label, $value) {
                        if (empty($value)) return;
                        echo '<div class="flex flex-col"><span class="text-sm font-semibold text-base-content/60">' . $label . '</span><span>' . $value . '</span></div>';
                    }
                @endphp

                {{-- A formatação de data foi removida, conforme solicitado --}}
                {{ display_field('Data de nascimento:', $paciente->birth_date) }}
                {{ display_field('Idade:', $paciente->age) }}
                {{ display_field('Sexo:', $paciente->sexo == 'M' ? 'Masculino' : 'Feminino') }}
                {{ display_field('RG:', $paciente->rg) }}
                {{ display_field('Cartão do SUS:', $paciente->sus) }}
                
                <div class="divider col-span-full my-2 sm:hidden"></div>

                {{ display_field('Responsável:', $paciente->responsavel) }}
                {{ display_field('Documento do responsável:', $paciente->doc_resp) }}
                {{ display_field('Telefone do responsável:', $paciente->telefone_resp) }}

                <div class="divider col-span-full my-2"></div>

                {{ display_field('Banco:', $paciente->banco) }}
                {{ display_field('Tipo de benefício:', $paciente->tipo_beneficio) }}
                {{ display_field('Valor mensal:', $paciente->valor_mensal) }}
                {{-- A formatação de data foi removida, conforme solicitado --}}
                {{ display_field('Data de recebimento:', $paciente->data_recebimento) }}

                <div class="col-span-full">
                     {{ display_field('Observações:', $paciente->obs) }}
                </div>
            </div>
        </div>
    </div>
</x-layout.app>