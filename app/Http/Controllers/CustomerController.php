<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Company;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        return view('customers.index')->with('customers', Customer::all());
    }


    public function create()
    {
        return view('customers.create')->with('companies', Company::all());
    }


    public function store(Request $request)
    {
        Customer::create($this->validateRequest());
        return redirect()->route('customers.index');
    }


    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }


    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'))->with('companies', Company::all());
    }


    public function update(Request $request, Customer $customer)
    {
        $customer->update($this->validateRequest());
        return redirect()->route('customers.show', ['customers' => $customer->id]);
    }


    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }

    private function validateRequest(){
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required'
        ]);
    }


}
