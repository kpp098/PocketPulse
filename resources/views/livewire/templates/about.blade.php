@extends('livewire.layout.app')

@section('title', 'About Pocket Pulse')
@section('meta_description', 'Pocket Pulse was created to simplify personal and business finance tracking, helping users stay financially organized anytime.')

@section('content')

<div class="py-20">

    <div class="max-w-4xl mx-auto text-center mb-16">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Our Story</h1>
        <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
            Pocket Pulse began with a simple question:
            <strong>“Why is money management still complicated?”</strong>
            In a world full of payment apps, online banking, UPI, and digital wallets,
            people still struggle to track where their money goes.
            <br><br>
            We created Pocket Pulse as a clean, intuitive, and powerful finance tracking tool
            designed for the digital lifestyle — simple enough for daily use and smart enough
            to handle both personal and business transactions.
        </p>
    </div>

    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center mb-24">
        <div>
            <h2 class="text-2xl font-bold mb-3 text-gray-900 dark:text-white">Our Vision</h2>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                To empower individuals and small businesses to understand, control,
                and grow their financial lives — not through complexity, but through clarity.
            </p>
            <br>
            <h2 class="text-2xl font-bold mb-3 text-gray-900 dark:text-white">Our Mission</h2>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                To offer a seamless, secure, and intelligent finance tracking solution that
                simplifies recording, analyzing, and understanding money movements — anytime, anywhere.
            </p>
        </div>

        <img src="https://images.unsplash.com/photo-1554224154-22dec7ec8818?q=80&w=1200"
             class="rounded-xl shadow-lg">
    </div>

    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">We Believe In</h2>
        <ul class="text-gray-600 dark:text-gray-300 space-y-2 leading-relaxed">
            <li>✅ Simplicity over complexity</li>
            <li>✅ Privacy and security of financial data</li>
            <li>✅ Helping users build better money habits</li>
            <li>✅ Accessible financial tools for everyone</li>
        </ul>
    </div>
</div>
@endsection
