@extends('layouts')
@section('title', 'Details for ' . $customer->name)

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Details for {{ $customer->name }}</h1>
        <a href="{{ route('customers.edit', ['customers' => $customer->id]) }}">Edit</a>
        <form action="{{ route('customers.destroy', ['customers' => $customer->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <p><strong>Name</strong> {{ $customer->name }}</p>
        <p><strong>Email</strong> {{ $customer->email }}</p>
        <p><strong>Company</strong> {{ $customer->company->name }}</p>
    </div>
</div>

@endsection
