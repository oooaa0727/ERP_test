<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Route;

class SupplierController extends Controller
{



    //Save
    public function store(Request $request)
    {
//建立供應商

        $suppliers = new Supplier;
        $suppliers->S_name = $request->S_name;
        $suppliers->S_TaxID = $request->S_TaxID;
        $suppliers->S_POC = $request->S_POC;
        $suppliers->S_contact = $request->S_contact;
        $suppliers->S_postal = $request->S_postal;
        $suppliers->S_address = $request->S_address;
        $suppliers->S_phone = $request->S_phone;
        $suppliers->S_cellphone = $request->S_cellphone;
        $suppliers->S_fax = $request->S_fax;
        $suppliers->S_email = $request->S_email;

        $suppliers->save();


Supplier::create(Request::all());
       return 'test';

    }


}
