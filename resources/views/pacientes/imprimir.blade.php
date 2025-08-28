<div>
    <a href="{{ route('pacientes.list') }}">
        << voltar </a>
            <div>
                @if ($paciente->photo)
                    <img src="/storage/{{ $paciente->photo }}" alt="Profile Picture" style="max-width: 100px;">
                @else
                    <img src="/storage/photos/avatar.png" alt="Profile Picture" style="max-width: 100px;">
                @endif
                <h1>{{ $paciente->name }}</h1>
                <p>CPF: {{ $paciente->cpf }}</p>
                <p>Data de nascimento: {{ $paciente->birth_date }}</p>
                <p>Idade: {{ $paciente->age }}</p>

                <p>Sexo: {{ $paciente->sexo }}</p>
                <p>RG: {{ $paciente->rg }}</p>
                <p>SUS: {{ $paciente->sus }}</p>
                <p>Responsável: {{ $paciente->responsavel }}</p>
                <p>Documento do responsável: {{ $paciente->doc_resp }}</p>
                <p>Telefone do responsável: {{ $paciente->telefone_resp }}</p>
                <p>Banco: {{ $paciente->banco }}</p>
                <p>Tipo de benefício: {{ $paciente->tipo_beneficio }}</p>
                <p>Valor mensal: {{ $paciente->valor_mensal }}</p>
                <p>Data de recebimento: {{ $paciente->data_recebimento }}</p>
                <p>Observações: {{ $paciente->obs }}</p>
            </div>
</div>
