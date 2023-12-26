@extends('layout')

@section('style')
    <link rel="stylesheet" href="{{ asset('style/messages/create.css') }}">
@endsection

@section('content')

<form action="{{ route('messages.store') }}" method="post">
    @csrf

    <div class="field">
        <h2><label for="name">Sender</label></h2>
        <input type="text" name="name">
    </div>

    <div class="field">
        <h2><label for="content">Message</label></h2>
        <textarea name="content"></textarea>
    </div>

    <input type="submit" value="Send Message">
</form>

@endsection
