@extends('layouts')
@section('title', 'Contact')

@section('content')
<h2>Contact</h2>

<form action="{{ route('contact.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="name">
    <div>{{ $errors->first('name') }}</div>
    <hr>

    <label for="">Email</label>
    <input type="text" name="email">
    <div>{{ $errors->first('email') }}</div>
    <hr>

    <label for="">Message</label>
    <textarea name="message"></textarea>
    <div>{{ $errors->first('message') }}</div>
    <hr>

    <button type="submit">Send Mail</button>
</form>

@endsection
