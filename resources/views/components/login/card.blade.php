@props(['actions'])

<div class="card w-full max-w-md bg-base-100 shadow-xl">
    <div class="card-body">

        {{-- Título --}}
        <h1 class="card-title my-4 justify-center text-3xl font-bold">
            Login
        </h1>

        {{ $slot }}
        <div>
            {{ $actions }}
        </div>
    </div>
</div>
