<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suppliers;

class SuppliersCtrl extends Controller
{
    public function index()
    {
        return Suppliers::all();
    }

    public function inactive()
    {
        return Suppliers::onlyTrashed()->get();
    }
 
    public function show($id)
    {   
        $supplier = Suppliers::withTrashed()->find($id);
        if (!is_null($supplier)) {
            return $supplier;
        } else {
            return ;
        }
    }

    public function store(Request $request)
    {
        return Suppliers::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $supplier = Suppliers::findOrFail($id);
        $supplier->update($request->all());

        return $supplier;
    }

    public function delete(Request $request, $id)
    {
        $supplier = Suppliers::findOrFail($id);
        $supplier->delete();

        return 204;
    }

    public function restore(Request $request, $id)
    {
        $supplier = Suppliers::onlyTrashed()->find($id);

        if (!is_null($supplier)) {
            $supplier->restore();
            return $supplier;
        } else {
            return ;
        }
    }
}
