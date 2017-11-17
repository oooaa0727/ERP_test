<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Supplier;
class SupplierController extends Controller
{
    /*
public function create(){
    $suppliers = new \App\Supplier();

    $suppliers->id = Input::get('id');
    $suppliers->name = Input::get('name');
    $suppliers->POC = Input::get('POC');
    $suppliers->contact = Input::get('contact');
    $suppliers->postal = Input::get('postal');
    $suppliers->address = Input::get('address');
    $suppliers->phone = Input::get('phone');
    $suppliers->fax = Input::get('fax');
    $suppliers->cellphone = Input::get('cellphone');

    $suppliers->TaxID = Input::get('TaxID');
    $suppliers->email = Input::get('email');
    $suppliers->save();

    return Redirect::back();
}

    protected function build(array $data)
    {
        return Supplier::create([
            'id' => $data['id'],
            'name' => $data['name'],
            'POC' => $data['POC'],
            'contact' => $data['contact'],
            'postal' => $data['postal'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'fax' => $data['fax'],
            'cell phone' => $data['cell phone'],
            'TaxID' => $data['TaxID'],
            'email' => $data['email']
        ]);

    }
*/
    public function index(){
        return view('basic.supplier.supplier');
    }
    public function test(){
        return 'test';
    }

    public function form(){
        return view('basic.supplier.create');
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
