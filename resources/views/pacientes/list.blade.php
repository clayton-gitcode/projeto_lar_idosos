<div>
    
    <h1>Lista de Pacientes</h1>
    <a href="{{ route('dashboard') }}"> << Voltar</a>
    <ul>
        @foreach ($pacientes as $paciente)
        <li>{{ $paciente->name }} {{ $paciente->last_name }}</li>
        <br>
        <ol>Nascimento: {{ $paciente->birth_date }}</ol>
        
        <a href="{{ route('pacientes.edit', $paciente) }}">editar</a>

        <form action="{{ route('pacientes.destroy', $paciente) }}" method="post"
            onsubmit="return confirm('Tem certeza ?')">
            @csrf
            @method('DELETE')
            <button>deletar 🗑️</button>
        </form>
        <hr>
        @endforeach
    </ul>
</div>
