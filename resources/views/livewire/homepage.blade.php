@extends('livewire.layout.app')

@section('title', 'Smart Expense & Income Tracker — Pocket Pulse')
@section('meta_description', 'Pocket Pulse is your personal finance assistant to track income, expenses, bank transactions, business spending, and cash flow anywhere, anytime.')

@section('content')

<div class="py-20">

    <!-- Hero Section -->
    <div class="text-center max-w-4xl mx-auto mb-16">
        <h1 class="text-5xl font-extrabold text-gray-900 dark:text-white leading-tight mb-6">
            Take Control Of Your Money With Pocket Pulse
        </h1>

        <p class="text-xl text-gray-600 dark:text-gray-300 mb-10">
            Your all-in-one smart money manager. Track every rupee — from expenses and incomes to bank transactions,
            business payments, and wallet balances — in one simple, secure platform.
        </p>

        <a href="/register"
           class="px-10 py-4 bg-blue-600 hover:bg-blue-700 text-white text-lg font-medium rounded-lg">
           Start Tracking — It’s Free
        </a>

        <p class="text-sm mt-3 text-gray-500 dark:text-gray-400">No credit card required</p>
    </div>

    <!-- Key Benefits -->
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10 mb-24">
        <div class="p-8 border dark:border-gray-700 rounded-xl shadow-sm bg-white dark:bg-gray-900">
            <h3 class="text-2xl font-bold mb-3">Track Every Transaction</h3>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                Capture all your financial details — payees, bank names, debit or credit,
                transaction IDs, notes, and amounts — with accuracy and ease.
            </p>
        </div>

        <div class="p-8 border dark:border-gray-700 rounded-xl shadow-sm bg-white dark:bg-gray-900">
            <h3 class="text-2xl font-bold mb-3">Your Finance Dashboard</h3>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                View real-time spending & earning history, total balances, category-wise analytics,
                and monthly money flow in a clean and powerful dashboard.
            </p>
        </div>

        <div class="p-8 border dark:border-gray-700 rounded-xl shadow-sm bg-white dark:bg-gray-900">
            <h3 class="text-2xl font-bold mb-3">Access Anywhere, Anytime</h3>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                Pocket Pulse works on mobile, tablet, and desktop. Your financial records stay in sync everywhere you go.
            </p>
        </div>
    </div>

    <!-- Long Description -->
    <div class="max-w-5xl mx-auto mb-24 text-center">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">
            A Financial Companion That Works Like You Think
        </h2>
        <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
            Managing finances shouldn’t be complicated. Whether you're a student, working professional,
            freelancer, small business owner, or someone who wants to understand where money goes —
            Pocket Pulse is built for you.
            <br><br>
            Unlike spreadsheets or paper diaries, Pocket Pulse lets you instantly record transactions,
            categorize your spending, track business reimbursements, monitor bank balances,
            store notes, and keep proof of payments — so you never miss a single financial detail again.
        </p>
    </div>

    <!-- CTA Section -->
    <div class="text-center">
        <h2 class="text-2xl font-semibold mb-3 text-gray-900 dark:text-white">Start Your Financial Journey Today</h2>
        <p class="text-gray-600 dark:text-gray-300 mb-6">
            Control your expenses, grow savings, and achieve financial freedom with clarity and confidence.
        </p>
        <a href="/register" class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium">
            Create Your Free Account
        </a>
    </div>
</div>
@endsection
