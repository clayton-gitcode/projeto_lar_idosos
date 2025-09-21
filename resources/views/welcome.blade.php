<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lar de Idosos - Gestão Simplificada</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-base-200">
    <div class="flex flex-col min-h-screen">
        <div class="navbar bg-base-100 shadow-md">
            <div class="flex-1">
                <a class="btn btn-ghost text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                    <span>Cuidado & Afeto</span>
                </a>
            </div>
            <div class="flex-none">
                <a href="{{ route('login') }}" class="btn btn-primary">Acessar Sistema</a>
            </div>
        </div>

        <main class="flex-grow">
            <div class="hero min-h-[60vh] bg-base-100">
                <div class="hero-content text-center">
                    <div class="max-w-md">
                        <h1 class="text-5xl font-bold">Gestão Completa para Lares de Idosos</h1>
                        <p class="py-6">Simplifique a administração, centralize informações dos pacientes e ofereça o melhor cuidado com um sistema pensado para as suas necessidades.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-wide">Entrar no Sistema</a>
                    </div>
                </div>
            </div>

            <div class="container mx-auto px-6 py-16">
                <h2 class="text-4xl font-bold text-center mb-12">Recursos Principais</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body items-center">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                            <h3 class="card-title mt-4">Gestão de Pacientes</h3>
                            <p>Cadastre, atualize e consulte informações detalhadas de cada paciente de forma rápida e segura.</p>
                        </div>
                    </div>
                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg>
                            <h3 class="card-title mt-4">Acompanhamento Fácil</h3>
                            <p>Visualize rapidamente a lista de pacientes, faça buscas e acesse os perfis com poucos cliques.</p>
                        </div>
                    </div>
                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" /></svg>
                            <h3 class="card-title mt-4">Relatórios e Impressão</h3>
                            <p>Gere listas e relatórios para impressão, facilitando a organização do dia a dia da instituição.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="footer footer-center p-4 bg-base-300 text-base-content">
            <aside>
                <p>Copyright © {{ date('Y') }} - Todos os direitos reservados</p>
            </aside>
        </footer>
    </div>
</body>
</html>