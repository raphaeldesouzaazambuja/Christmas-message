@extends('layout')

@section('style')
    <link rel="stylesheet" href="{{ asset('style/messages/show.css') }}">
@endsection

@section('content')

    <div class="content">
        @if ($message->name)
            <h1> By {{ $message->name }} with great affection</h1>
        @else
            <h1>With great affection</h1>
        @endif

        <h3 class="message">{{ $message->content }}</h3>
    </div>

        @if ($preview)
        <p class="link">
            Link: <a href="{{ route('messages.show', ['hash' => $message->hash]) }}">{{ route('messages.show', ['hash' => $message->hash]) }}</a>
        </p>
        @endif

@endsection


