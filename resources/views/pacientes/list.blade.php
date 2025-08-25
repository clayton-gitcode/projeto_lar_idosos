<div>

    <h1>Lista de Pacientes</h1>
    <a href="{{ route('dashboard') }}">
        << Voltar</a>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Responsável</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $paciente)
                    <tr>
                        <td>{{ $paciente->name }}</td>
                        <td>{{ $paciente->cpf }}</td>
                        <td>{{ $paciente->responsavel }}</td>
                        <td>{{ $paciente->telefone_resp }}</td>
                        <td>
                            <a href="{{ route('pacientes.imprimir', $paciente) }}">📄</a>
                        </td>
                        <td>
                            <a href="{{ route('pacientes.edit', $paciente) }}">✏️</a>
                        </td>
                        <td>
                            <form action="{{ route('pacientes.destroy', $paciente) }}" method="post"
                                onsubmit="return confirm('Tem certeza ?')">
                                @csrf
                                @method('DELETE')
                                <button>🗑️</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</div>