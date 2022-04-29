@extends('layouts.app')
@section('title', 'All Customers')

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Customer List</h1>
        <p><a href="{{ route('customers.create') }}">Add New Customer</a></p>
    </div>
</div>

@foreach ($customers as $customer )
<div class="row">
    <div class="col-2">
        {{ $customer->id }}
    </div>
    <div class="col-4"><a href="{{ route('customers.show', ['customers' => $customer->id ]) }}">{{ $customer->name }}</a></div>
    <div class="col-4">{{ $customer->company->name }}</div>
    <div class="col-2">{{ $customer->active ? 'Active' : 'Inactive' }}</div>
</div>
@endforeach

@endsection
