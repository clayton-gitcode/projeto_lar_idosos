<div>
    <h1>Dashboard</h1>
    @if($message = session()->get('message'))
    <div>{{ $message }}</div>        
    @endif

    <ul>
        <li><a href="{{ route('pacientes.create') }}">Cadastrar pacientes</a></li>
        <li><a href="{{ route('pacientes.list') }}">Listar pacientes</a></li>
    </ul>
</div>
