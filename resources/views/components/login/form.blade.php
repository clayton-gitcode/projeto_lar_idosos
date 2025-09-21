@props(['route', 'post'=>null])

{{-- Mensagem de Sessão (Ex: "Logout efetuado com sucesso") --}}
        @if ($message = session()->get('message'))
            <div role="alert" class="alert alert-success mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ $message }}</span>
            </div>
        @endif

<form action="{{ $route }}" method="{{ $post ? 'post' : 'get' }}" class="space-y-4" {{ $attributes }}> 
    {{-- $attributes = variavel do blade que inclui o id do form --}}
    @csrf
    {{ $slot }}
</form>