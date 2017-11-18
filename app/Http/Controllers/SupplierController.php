<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Supplier;
class SupplierController extends Controller
{

    public function index(){
        return view('basic.supplier.index');
    }

    public function create()
    {
        return view('basic.supplier.create');
    }

    public function edit($id)
    {
        $data = ['id' => $id];

        return view('basic.supplier.edit', $data);
    }

    public function recall()
    {
        return view('basic.supplier.index');
    }





    public function store(Request $request){
        $this->validate($request, [
            id =>  'required|max:255',
            name =>'required|max:255',
            POC =>  'required|max:255',
            contact =>  'required|max:255',
            postal =>  'required|max:255',
            address =>  'required|max:255',
            phone =>  'required|max:255',
            fax =>  'required|max:255',
            cellphone =>  'required|max:255',

            TaxID =>  'required|max:255',
            email =>  'required|max:255',
        ]);
        $request->suppliers()->create([

            'id '=> $request->id,
            'name' => $request->name,
            'POC' => $request->POC,
            'contact'=> $request->contact,
            'postal' => $request->postal,
            'address' => $request->address,
            'phone' => $request->phone,
            'fax' => $request->fax,
            'cellphone '=> $request->cellphone,

           'TaxID' => $request->TaxID,
            'email'=> $request->email,
        ]);

      //  Supplier::create(Request::all());
        return redirect()->route('basic.supplier.suppler');

    }
}
