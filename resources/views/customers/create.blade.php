@extends('layouts.app')

@section('title', 'Create a Customer')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add Customer</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('customers.store') }}" method="POST">
                @csrf

                <label for="">Name</label>
                <input type="text" name="name">
                <div>{{ $errors->first('name') }}</div>
                <hr>

                <label for="">Email</label>
                <input type="text" name="email">
                <div>{{ $errors->first('email') }}</div>
                <hr>

                <label for="">Status</label>
                <select name="active" id="">
                    <option value="" disabled>Seelct a customer status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
                <div>{{ $errors->first('email') }}</div>
                <hr>

                <label for="">Company</label>
                <select name="company_id" id="">
                    @foreach ($companies as $company )
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach

                </select>
                <div>{{ $errors->first('email') }}</div>
                <hr>

                <button type="submit">Add customer</button>
            </form>
        </div>
    </div>
@endsection
