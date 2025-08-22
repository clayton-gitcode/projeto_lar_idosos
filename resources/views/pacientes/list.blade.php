<div>
    
    <h1>Lista de Pacientes</h1>
    <a href="{{ route('dashboard') }}"> << Voltar</a>
    <ul>
        @foreach ($pacientes as $paciente)
        <li>{{ $paciente->name }} {{ $paciente->last_name }}</li>
        <br>
        <ol>Nascimento: {{ $paciente->birth_date }}</ol>
        <hr>          
        @endforeach
    </ul>
</div>
