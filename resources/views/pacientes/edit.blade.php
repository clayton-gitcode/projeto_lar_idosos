<div>
    <h1>Editar Paciente :: {{ $paciente->id }}</h1>

    @if($message = session()->get('message'))
    <div>{{ $message }}</div>
    @endif

    <form action="{{ route('pacientes.edit', $paciente ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div>
            <label for="photo">Foto</label>
            <input type="file" name="photo"/>
        </div>
        <div>
            <label for="name">Nome completo:</label>
            <input type="text" name="name" placeholder="Nome completo" value="{{old('name', $paciente->name)}}"/>

            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="birth_date">Data de Nascimento:</label>
            <input type="date" name="birth_date" value="{{old('birth_date', $paciente->birth_date)}}"/>

            @error('birth_date')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="age">Idade:</label>
            <input type="number" name="age" placeholder="Idade" value="{{old('age',$paciente->age)}}"/>

            @error('age')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="sexo">Sexo:</label>
            <label>
                <input type="radio" name="sexo" value="M" {{ old('sexo', $paciente->sexo) == 'M' ? 'checked' : '' }}/> M
            </label>
            <label>
                <input type="radio" name="sexo" value="F" {{ old('sexo', $paciente->sexo) == 'F' ? 'checked' : '' }}/> F
            </label>

            @error('sexo')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="rg">RG:</label>
            <input type="text" name="rg" placeholder="MG 00 000 00" value="{{old('rg', $paciente->rg)}}"/>

            @error('rg')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" placeholder="000-000-000-00" value="{{old('cpf', $paciente->cpf)}}"/>

            @error('cpf')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="sus">SUS:</label>
            <input type="text" name="sus" placeholder="000000000000" value="{{old('sus', $paciente->sus)}}"/>

            @error('sus')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="responsavel">Responsável:</label>
            <input type="text" name="responsavel" placeholder="Nome completo" value="{{old('responsavel', $paciente->responsavel)}}"/>

            @error('responsavel')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="doc_resp">Doc. resp:</label>
            <input type="text" name="doc_resp" placeholder="RG 000 000 00" value="{{old('doc_resp', $paciente->doc_resp)}}"/>

            @error('doc_resp')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="telefone_resp">Telefone resp.:</label>
            <input type="text" name="telefone_resp" placeholder="(00)000-0000" value="{{old('telefone_resp', $paciente->telefone_resp)}}"/>

            @error('telefone_resp')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="banco">Banco:</label>
            <input type="text" name="banco" placeholder="nome do banco" value="{{old('banco', $paciente->banco)}}"/>

            @error('banco')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="tipo_beneficio">Beneficio:</label>
            <input type="text" name="tipo_beneficio" placeholder="beneficio" value="{{old('tipo_beneficio', $paciente->tipo_beneficio )}}"/>

            @error('tipo_beneficio')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="valor_mensal">Valor Mensal:</label>
            <input type="text" name="valor_mensal" placeholder="R$ 000,00" value="{{old('valor_mensal', $paciente->valor_mensal )}}"/>

            @error('valor_mensal')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="data_recebimento">Recebimento: </label>
            <input type="date" name="data_recebimento" placeholder="R$ 000,00" value="{{old('data_recebimento', $paciente->data_recebimento)}}"/>

            @error('data_recebimento')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="obs">OBS:</label>
            <input type="text" name="obs" placeholder="obs" value="{{old('obs', $paciente->obs)}}"/>

            @error('obs')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <a href="{{ route('dashboard') }}"> << cancelar</a>
        <button>Salvar</button>        
    </form>
</div>