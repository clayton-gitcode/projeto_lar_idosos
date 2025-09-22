@props(['route', 'title', 'description','icon'])
<a href="{{ $route }}"
    class="card bg-base-100 shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
    <div class="card-body">
        <div class="flex items-center space-x-4">
            <div class="flex-shrink-0">
                {{-- Ícone SVG --}}
                {{ $icon }}
            </div>
            <div>
                <h2 class="card-title">{{ $title }}</h2>
                <p class="text-sm text-base-content/60">{{ $description }}</p>
            </div>
        </div>
    </div>
</a>
