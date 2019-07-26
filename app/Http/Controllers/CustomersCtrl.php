<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;

class CustomersCtrl extends Controller
{
    public function index()
    {
        return Customers::all();
    }

    public function inactive()
    {
        return Customers::onlyTrashed()->get();
    }
 
    public function show($id)
    {   
        $customers_coll = Customers::withTrashed()->where('id' , $id)->get();

        if( $customers_coll->first() )
            return $customers_coll->first();
        else
            return ;
    }

    public function store(Request $request)
    {
        return Customers::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $customer = Customers::findOrFail($id);
        $customer->update($request->all());

        return $customer;
    }

    public function delete(Request $request, $id)
    {
        $customer = Customers::findOrFail($id);
        $customer->delete();

        return 204;
    }

    public function restore(Request $request, $id)
    {
        $customer = Customers::onlyTrashed()->find($id);

        if (!is_null($customer)) {
            $customer->restore();
            return $customer;
        } else {
            return ;
        }
    }
}
