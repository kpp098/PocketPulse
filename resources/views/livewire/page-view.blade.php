@extends('livewire.layout.app')
@section('content')
    <div class="max-w-5xl mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">{{ $page->title }}</h1>
        <div class="prose max-w-none">
            {!! html_entity_decode($page->content) !!}
        </div>
    </div>
@endsection
