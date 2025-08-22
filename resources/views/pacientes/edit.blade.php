<div>
    <h1>Editar Paciente :: {{ $paciente->id }}</h1>

    @if($message = session()->get('message'))
    <div>{{ $message }}</div>
    @endif

    <form action="{{ route('pacientes.edit', $paciente ) }}" method="POST">
        @csrf
        @method('put')

        <div>
            <input type="text" name="name" placeholder="Primeiro Nome" value="{{old('name', $paciente->name )}}" />

            @error('name')
            <span>{{ $message }}</span>
            @enderror

            <input type="text" name="last_name" placeholder="Ultimo Nome"
                value="{{old('last_name', $paciente->last_name )}}" />

            @error('last_name')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="birth_date">Data de Nascimento</label>
            <input type="date" name="birth_date" value="{{old('birth_date', $paciente->birth_date)}}" />

            @error('birth_date')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button>Salvar</button>
    </form>
</div>