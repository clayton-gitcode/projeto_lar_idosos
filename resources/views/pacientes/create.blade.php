<x-layout.app>
    <div class="mx-auto max-w-7xl p-4 sm:p-6 lg:p-8">
        {{-- Cabeçalho --}}
        <div class="mb-6 flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-center">
            <div>
                <h1 class="text-3xl font-bold text-base-content">Cadastrar Novo Paciente</h1>
                <p class="mt-1 text-base-content/70">Preencha os campos abaixo para adicionar um paciente.</p>
            </div>
            <a href="{{ route('dashboard') }}" class="btn btn-ghost">
                {{-- resources/views/components/icons/arrow-left.blade.php --}}
                <x-icons.arrow-left/>
                Voltar
            </a>
        </div>
        
        {{-- Mensagem de Feedback --}}
        @if($message = session()->get('message'))
        <div role="alert" class="alert alert-success mb-6 shadow-md">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>{{ $message }}</span>
        </div>
        @endif

        {{-- Card do Formulário --}}
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form action="{{ route('pacientes.create') }}" method="POST">
                    @csrf

                    {{-- Grid para organizar os campos --}}
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

                        {{-- SEÇÃO: DADOS PESSOAIS --}}
                        <div class="divider col-span-full text-lg font-semibold">Dados Pessoais</div>

                        <div class="form-control lg:col-span-2">
                            <label class="label"><span class="label-text">Nome Completo</span></label>
                            <input type="text" name="name" placeholder="Nome completo do paciente" value="{{old('name')}}" class="input input-bordered w-full @error('name') input-error @enderror" />
                            @error('name')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-control">
                            <label class="label"><span class="label-text">Data de Nascimento</span></label>
                            <input type="date" name="birth_date" value="{{old('birth_date')}}" class="input input-bordered w-full @error('birth_date') input-error @enderror" />
                            @error('birth_date')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-control">
                            <label class="label"><span class="label-text">Idade</span></label>
                            <input type="number" name="age" placeholder="Idade" value="{{old('age')}}" class="input input-bordered w-full @error('age') input-error @enderror" />
                            @error('age')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>
                        
                        <div class="form-control">
                            <label class="label"><span class="label-text">Sexo</span></label>
                            <div class="flex items-center gap-4">
                                <label class="label cursor-pointer gap-2">
                                    <input type="radio" name="sexo" value="M" class="radio radio-primary" {{ old('sexo') == 'M' ? 'checked' : '' }} />
                                    <span class="label-text">Masculino</span> 
                                </label>
                                <label class="label cursor-pointer gap-2">
                                    <input type="radio" name="sexo" value="F" class="radio radio-primary" {{ old('sexo') == 'F' ? 'checked' : '' }} />
                                    <span class="label-text">Feminino</span> 
                                </label>
                            </div>
                             @error('sexo')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-control">
                            <label class="label"><span class="label-text">RG</span></label>
                            <input type="text" name="rg" placeholder="MG 00.000.000" value="{{old('rg')}}" class="input input-bordered w-full @error('rg') input-error @enderror" />
                             @error('rg')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>
                        
                        <div class="form-control">
                            <label class="label"><span class="label-text">CPF</span></label>
                            <input type="text" name="cpf" placeholder="000.000.000-00" value="{{old('cpf')}}" class="input input-bordered w-full @error('cpf') input-error @enderror" />
                            @error('cpf')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-control">
                            <label class="label"><span class="label-text">Cartão do SUS</span></label>
                            <input type="text" name="sus" placeholder="Nº do cartão do SUS" value="{{old('sus')}}" class="input input-bordered w-full @error('sus') input-error @enderror" />
                            @error('sus')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>

                        {{-- SEÇÃO: DADOS DO RESPONSÁVEL --}}
                        <div class="divider col-span-full text-lg font-semibold">Dados do Responsável</div>

                        <div class="form-control">
                            <label class="label"><span class="label-text">Nome do Responsável</span></label>
                            <input type="text" name="responsavel" placeholder="Nome completo" value="{{old('responsavel')}}" class="input input-bordered w-full @error('responsavel') input-error @enderror" />
                            @error('responsavel')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>
                        
                        <div class="form-control">
                            <label class="label"><span class="label-text">Documento do Responsável</span></label>
                            <input type="text" name="doc_resp" placeholder="RG ou CPF" value="{{old('doc_resp')}}" class="input input-bordered w-full @error('doc_resp') input-error @enderror" />
                             @error('doc_resp')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-control">
                            <label class="label"><span class="label-text">Telefone do Responsável</span></label>
                            <input type="text" name="telefone_resp" placeholder="(00) 90000-0000" value="{{old('telefone_resp')}}" class="input input-bordered w-full @error('telefone_resp') input-error @enderror" />
                            @error('telefone_resp')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>

                        {{-- SEÇÃO: INFORMAÇÕES FINANCEIRAS --}}
                        <div class="divider col-span-full text-lg font-semibold">Informações Financeiras</div>

                        <div class="form-control">
                            <label class="label"><span class="label-text">Banco</span></label>
                            <input type="text" name="banco" placeholder="Nome do banco" value="{{old('banco')}}" class="input input-bordered w-full @error('banco') input-error @enderror" />
                            @error('banco')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-control">
                            <label class="label"><span class="label-text">Tipo de Benefício</span></label>
                            <input type="text" name="tipo_beneficio" placeholder="Ex: Aposentadoria, Pensão" value="{{old('tipo_beneficio')}}" class="input input-bordered w-full @error('tipo_beneficio') input-error @enderror" />
                            @error('tipo_beneficio')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>
                        
                        <div class="form-control">
                            <label class="label"><span class="label-text">Valor Mensal</span></label>
                            <input type="text" name="valor_mensal" placeholder="R$ 0,00" value="{{old('valor_mensal')}}" class="input input-bordered w-full @error('valor_mensal') input-error @enderror" />
                             @error('valor_mensal')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-control">
                            <label class="label"><span class="label-text">Data de Recebimento</span></label>
                            <input type="date" name="data_recebimento" value="{{old('data_recebimento')}}" class="input input-bordered w-full @error('data_recebimento') input-error @enderror" />
                            @error('data_recebimento')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-control col-span-full">
                            <label class="label"><span class="label-text">Observações</span></label>
                            <textarea name="obs" placeholder="Alguma observação importante..." class="textarea textarea-bordered h-24 @error('obs') textarea-error @enderror">{{old('obs')}}</textarea>
                            @error('obs')<span class="mt-1 text-xs text-error">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    {{-- Ações do Formulário --}}
                    <div class="card-actions mt-8 justify-end">
                        <a href="{{ route('dashboard') }}" class="btn btn-ghost">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Cadastrar Paciente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout.app>