<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'CV Craft')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    sans: ['Space Grotesk', 'Inter', 'system-ui', 'sans-serif'],
                },
                extend: {
                    colors: {
                        brand: {
                            500: '#6366f1',
                            600: '#4f46e5',
                            950: '#020617',
                        },
                    },
                    backgroundImage: {
                        noise: "radial-gradient(circle at 1px 1px, rgba(255,255,255,0.04) 1px, transparent 0)",
                    },
                },
            },
        }
    </script>
    <style>[x-cloak]{display:none!important;}</style>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-slate-950 bg-noise [background-size:140px_140px] text-white antialiased selection:bg-indigo-400/30">
    <div class="relative min-h-screen overflow-hidden">
        <div class="pointer-events-none absolute inset-0 bg-gradient-to-br from-indigo-500/10 via-purple-500/5 to-transparent blur-3xl"></div>
        <div class="relative flex min-h-screen flex-col">
            <header class="sticky top-0 z-30 border-b border-white/5 bg-slate-950/80 backdrop-blur">
                <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
                    <a href="{{ route('home') }}" class="flex items-center gap-2">
                        <span class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-gradient-to-br from-indigo-500 to-purple-500 font-bold text-xl">CV</span>
                        <span class="text-lg font-semibold tracking-tight text-white/90">CV Craft</span>
                    </a>
                    <nav class="hidden gap-6 text-sm text-white/70 md:flex">
                        <a href="{{ route('home') }}" class="transition hover:text-white {{ request()->routeIs('home') ? 'text-white' : '' }}">Home</a>
                        @auth
                            <a href="{{ route('cv.create') }}" class="transition hover:text-white {{ request()->routeIs('cv.*') ? 'text-white' : '' }}">Builder</a>
                            <a href="{{ route('profile') }}" class="transition hover:text-white {{ request()->routeIs('profile') ? 'text-white' : '' }}">Profile</a>
                        @endauth
                        @guest
                            <a href="{{ route('login') }}" class="transition hover:text-white {{ request()->routeIs('login') ? 'text-white' : '' }}">Login</a>
                            <a href="{{ route('register') }}" class="transition hover:text-white {{ request()->routeIs('register') ? 'text-white' : '' }}">Sign up</a>
                        @endguest
                    </nav>
                    <div class="flex items-center gap-3">
                        @auth
                            <form action="{{ route('logout') }}" method="POST" class="hidden md:block">
                                @csrf
                                <button class="rounded-2xl bg-white/10 px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-indigo-500/20 transition hover:bg-white/20">
                                    Logout
                                </button>
                            </form>
                            <a href="{{ route('cv.create') }}" class="md:hidden rounded-xl bg-white/10 px-4 py-2 text-sm font-semibold">Build</a>
                        @else
                            <a href="{{ route('register') }}" class="rounded-2xl bg-white/10 px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-indigo-500/20 transition hover:bg-white/20">
                                Get started
                            </a>
                        @endauth
                    </div>
                </div>
            </header>

            <main class="flex-1">
                @if (session('status'))
                    <div class="mx-auto mt-6 max-w-3xl px-6">
                        <div class="rounded-2xl border border-emerald-400/30 bg-emerald-400/10 px-4 py-3 text-sm text-emerald-100">
                            {{ session('status') }}
                        </div>
                    </div>
                @endif
                @yield('content')
            </main>

            <footer class="mx-auto mt-16 flex w-full max-w-6xl flex-col border-t border-white/5 px-6 py-10 text-sm text-white/60 md:flex-row md:items-center md:justify-between">
                <p>© {{ date('Y') }} CV Craft. Designed for serious candidates.</p>
                <div class="mt-4 flex gap-4 md:mt-0">
                    <a href="#" class="transition hover:text-white">Privacy</a>
                    <a href="#" class="transition hover:text-white">Terms</a>
                    <a href="#" class="transition hover:text-white">Support</a>
                </div>
            </footer>
        </div>
    </div>
    @stack('scripts')
</body>
</html>

