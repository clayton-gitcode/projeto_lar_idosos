<div>
    <h1>Cadastrar Paciente</h1>
    <a href="{{ route('dashboard') }}"><< voltar</a>
    @if($message = session()->get('message'))
    <div>{{ $message }}</div>        
    @endif
    
    <form action="{{ route('pacientes.create') }}" method="POST">
        @csrf

        <div>
            <label for="name">Nome completo:</label>
            <input type="text" name="name" placeholder="Nome completo" value="{{old('name')}}"/>

            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="birth_date">Data de Nascimento:</label>
            <input type="date" name="birth_date" value="{{old('birth_date')}}"/>

            @error('birth_date')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="age">Idade:</label>
            <input type="number" name="age" placeholder="Idade" value="{{old('age')}}"/>

            @error('age')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="sexo">Sexo:</label>
            M<input type="radio" name="sexo" value="M" {{ old('sexo') == 'M' ? 'checked' : '' }}/>
            F<input type="radio" name="sexo" value="F" {{ old('sexo') == 'F' ? 'checked' : '' }}/>

            @error('sexo')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="rg">RG:</label>
            <input type="text" name="rg" placeholder="MG 00 000 00" value="{{old('rg')}}"/>

            @error('rg')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" placeholder="000-000-000-00" value="{{old('cpf')}}"/>

            @error('cpf')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="sus">SUS:</label>
            <input type="text" name="sus" placeholder="000000000000" value="{{old('sus')}}"/>

            @error('sus')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="responsavel">Responsável:</label>
            <input type="text" name="responsavel" placeholder="Nome completo" value="{{old('responsavel')}}"/>

            @error('responsavel')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="doc_resp">Doc. resp:</label>
            <input type="text" name="doc_resp" placeholder="RG 000 000 00" value="{{old('doc_resp')}}"/>

            @error('doc_resp')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="telefone_resp">Telefone resp.:</label>
            <input type="text" name="telefone_resp" placeholder="(00)000-0000" value="{{old('telefone_resp')}}"/>

            @error('telefone_resp')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="banco">Banco:</label>
            <input type="text" name="banco" placeholder="nome do banco" value="{{old('banco')}}"/>

            @error('banco')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="tipo_beneficio">Beneficio:</label>
            <input type="text" name="tipo_beneficio" placeholder="beneficio" value="{{old('tipo_beneficio')}}"/>

            @error('tipo_beneficio')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="valor_mensal">Valor Mensal:</label>
            <input type="text" name="valor_mensal" placeholder="R$ 000,00" value="{{old('valor_mensal')}}"/>

            @error('valor_mensal')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="data_recebimento">Recebimento: </label>
            <input type="date" name="data_recebimento" placeholder="R$ 000,00" value="{{old('data_recebimento')}}"/>

            @error('data_recebimento')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="obs">OBS:</label>
            <input type="text" name="obs" placeholder="obs" value="{{old('obs')}}"/>

            @error('obs')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button>Salvar</button>
    </form>
</div>
