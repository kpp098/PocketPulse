<div class="flex items-center justify-between w-full">

    {{-- Logo --}}
    <a href="{{ url('/') }}" class="flex items-center">
        @if(isset($settings) && $settings->main_logo_path)
            <img src="{{ asset('storage/'.$settings->main_logo_path) }}" alt="{{ $settings->site_name }}" class="h-10 w-auto">
        @else
            <span class="text-xl font-bold">
                {{ $settings->site_name ?? config('app.name') }}
            </span>
        @endif
    </a>

    {{-- Navigation --}}
    <livewire:layout.navigation :pages="$pages" />
</div>
