<nav class="-mx-3 flex flex-1 justify-end items-center space-x-4">

    @foreach ($pages as $page)
        <a
            href="{{ route('page.show', $page->slug) }}"
            class="rounded-md px-3 py-2 text-black transition hover:text-black/70 dark:text-white dark:hover:text-white/80"
        >
            {{ $page->title }}
        </a>
    @endforeach

    {{-- Auth Links --}}
    @auth
        <a href="{{ url('/dashboard') }}" class="px-3 py-2">Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="px-3 py-2">Log in</a>
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="px-3 py-2">Register</a>
        @endif
    @endauth
</nav>
