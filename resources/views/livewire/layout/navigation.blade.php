@php
    use App\Models\Page;
    $pages = Page::where('is_visible', true)->orderBy('title')->get();
@endphp

<nav class="-mx-3 flex flex-1 justify-end items-center space-x-4">

    {{-- Dynamically added pages from Filament --}}
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
        <a
            href="{{ url('/dashboard') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
        >
            Dashboard
        </a>

    @else
        <a
            href="{{ route('login') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
        >
            Log in
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Register
            </a>
        @endif
    @endauth
</nav>
