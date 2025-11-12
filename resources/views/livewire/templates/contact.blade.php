@extends('livewire.layout.app')

@section('title', 'Contact Pocket Pulse')
@section('meta_description', 'Reach out to Pocket Pulse for support, feedback, and solutions related to financial tracking and account assistance.')

@section('content')

<div class="py-20">

    <div class="text-center max-w-3xl mx-auto mb-12">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Contact Us</h1>
        <p class="text-gray-600 dark:text-gray-300">
            Have questions, feedback, or need help?
            We are here to assist you with anything related to your Pocket Pulse account,
            transaction history, feature support, or technical assistance.
        </p>
    </div>

    <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-12">

        <form class="space-y-6">
            @csrf
            <input type="text" placeholder="Your Name" class="w-full p-4 rounded border dark:border-gray-700 bg-white dark:bg-gray-900">
            <input type="email" placeholder="Email" class="w-full p-4 rounded border dark:border-gray-700 bg-white dark:bg-gray-900">
            <textarea rows="5" placeholder="How can we help you?" class="w-full p-4 rounded border dark:border-gray-700 bg-white dark:bg-gray-900"></textarea>
            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold">
                Send Message
            </button>
        </form>

        <div class="bg-gray-100 dark:bg-gray-800 p-8 rounded-xl">
            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Support & Contact</h3>
            <p class="text-gray-600 dark:text-gray-300 mb-2">📧 support@pocketpulse.com</p>
            <p class="text-gray-600 dark:text-gray-300 mb-2">🌐 www.pocketpulse.com</p>
            <p class="text-gray-600 dark:text-gray-300">📍 India — Remote Support Available</p>
        </div>
    </div>
</div>
@endsection

