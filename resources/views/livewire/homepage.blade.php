@extends('livewire.layout.app')

@section('content')
<main class="bg-gradient-to-br from-[#E6FFF8] via-white to-[#F3FFF9] dark:from-zinc-900 dark:via-zinc-800 dark:to-zinc-900 min-h-screen py-16 px-6 lg:px-12 transition-colors duration-300">

    {{-- HERO SECTION --}}
    <section class="text-center max-w-3xl mx-auto">
        <img src="{{ asset('images/pocket_pulse.png') }}" alt="PocketPulse Logo" class="mx-auto w-28 h-28 mb-6">

        <h1 class="text-4xl font-bold text-[#1E293B] dark:text-white mb-4">
            Welcome to <span class="text-[#00BFA6]">Pocket</span><span class="text-[#6BDB57]">Pulse</span>
        </h1>

        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-8">
            Track your productivity, stay organized, and manage your workflow with ease.
            PocketPulse gives you real-time insights and control over your daily performance.
        </p>

        <div class="flex justify-center gap-4">
            <a href="{{ route('dashboard') }}"
                class="bg-gradient-to-r from-[#00BFA6] to-[#6BDB57] text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:opacity-90 transition">
                Go to Dashboard
            </a>
            <a href="#features"
                class="border border-[#00BFA6] text-[#00BFA6] font-semibold px-6 py-3 rounded-lg hover:bg-[#00BFA6] hover:text-white transition">
                Learn More
            </a>
        </div>
    </section>

    {{-- FEATURE GRID --}}
    <section id="features" class="mt-20 grid gap-8 lg:grid-cols-3 max-w-6xl mx-auto">
        {{-- Feature Card --}}
        <div class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-md hover:shadow-lg transition transform hover:-translate-y-1">
            <div class="flex items-center justify-center h-14 w-14 rounded-full bg-gradient-to-r from-[#00BFA6]/10 to-[#6BDB57]/10 mb-4">
                <svg class="w-7 h-7 text-[#00BFA6]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11 3a8 8 0 0 1 8 8v4a4 4 0 0 1-8 0V9a4 4 0 0 1 8 0v4" />
                </svg>
            </div>
            <h3 class="text-lg font-semibold text-[#1E293B] dark:text-white">Analytics Dashboard</h3>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                Visualize your key metrics and monitor performance in real-time using smart charts.
            </p>
        </div>

        <div class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-md hover:shadow-lg transition transform hover:-translate-y-1">
            <div class="flex items-center justify-center h-14 w-14 rounded-full bg-gradient-to-r from-[#00BFA6]/10 to-[#6BDB57]/10 mb-4">
                <svg class="w-7 h-7 text-[#00BFA6]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 7V3m8 4V3M4 11h16M4 19h16M5 11v8m14-8v8" />
                </svg>
            </div>
            <h3 class="text-lg font-semibold text-[#1E293B] dark:text-white">Smart Scheduling</h3>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                Let AI help you automatically organize tasks, meetings, and deadlines efficiently.
            </p>
        </div>

        <div class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-md hover:shadow-lg transition transform hover:-translate-y-1">
            <div class="flex items-center justify-center h-14 w-14 rounded-full bg-gradient-to-r from-[#00BFA6]/10 to-[#6BDB57]/10 mb-4">
                <svg class="w-7 h-7 text-[#00BFA6]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h3 class="text-lg font-semibold text-[#1E293B] dark:text-white">Task Automation</h3>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                Streamline your routine by automating repetitive work and focusing on priorities.
            </p>
        </div>
    </section>

    {{-- CTA SECTION --}}
    <section class="mt-24 text-center">
        <h2 class="text-2xl font-bold text-[#1E293B] dark:text-white mb-4">
            Boost Your Productivity with PocketPulse
        </h2>
        <p class="text-gray-600 dark:text-gray-400 mb-8">
            Get started today and experience effortless performance tracking and workflow management.
        </p>
        <a href="{{ route('register') }}"
            class="bg-gradient-to-r from-[#00BFA6] to-[#6BDB57] text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:opacity-90 transition">
            Get Started for Free
        </a>
    </section>
</main>
@endsection
