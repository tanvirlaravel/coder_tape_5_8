@extends('layouts.app')

@section('title', 'Update Customer' . $customer->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Updae Customer "{{ $customer->name }}"</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('customers.update', ['customers' => $customer->id]) }}" method="POST">
                @csrf
                @method('PATCH')

                <label for="">Name</label>
                <input type="text" name="name" value="{{ $customer->name }}">
                <div>{{ $errors->first('name') }}</div>
                <hr>

                <label for="">Email</label>
                <input type="text" name="email" value="{{ $customer->email }}">
                <div>{{ $errors->first('email') }}</div>
                <hr>


                <label for="">Status</label>
                <select name="active" id="">
                    <option value="" disabled>Seelct a customer status</option>
                    <option value="1" {{ $customer->active ? "selected" : "" }}>Active</option>
                    <option value="0" {{ $customer->active ? "" : "selected" }}>Inactive</option>
                </select>
                <div>{{ $errors->first('email') }}</div>
                <hr>

                <label for="">Company</label>
                <select name="company_id" id="">
                    @foreach ($companies as $company )
                    <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : ''  }} >{{ $company->name }}</option>

                    @endforeach

                </select>
                <div>{{ $errors->first('email') }}</div>
                <hr>

                <button type="submit">Update customer</button>
            </form>
        </div>
    </div>
@endsection
