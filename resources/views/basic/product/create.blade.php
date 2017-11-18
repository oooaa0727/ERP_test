@extends('layouts.master')
@section('title','Product')
@section('content')

    <div>


        <form action="store" method="post" class="bootstrap-frm">
            {{ csrf_field() }}
            <h1>Product Form
                <span>Please fill all the texts in the fields.</span>
            </h1>
            <label>
                <span>品名 :</span>
                <input id="P_name" type="text" name="P_name" placeholder="product Name" />
            </label>

            <label>
                <span>規格 :</span>
                <input id="P_TaxID" type="text" name="P_spec" placeholder="22555003" />
            </label>
            <label>
                <span>單位 :</span>
                <select name="Unit"  >
                    　<option value="bale">包</option>
                    　<option value="block">塊</option>
                    　<option value="kilogram">公斤</option>
                    　<option value="carton">箱</option>
                     <option value="piece">個</option>
                </select>
            </label>
            <label>
                <span>數量 :</span>
                <input id="P_contact" type="text" name="P_quantity" placeholder="0" />
            </label>
            <label>
                <span>進價 :</span>
                <input id="P_postal" type="text" name="P_pur_price" placeholder="$2" />
            </label>
            <label>
                <span>售價 :</span>
                <input id="P_address" type="text" name="P_sale_price" placeholder="$5" />
            </label>


            <label>
                <span>&nbsp;</span>
                <input type="submit" class="button" value="送出" />

                <input type="Reset" class="button" value="重填" />
            </label>
        </form>
    </div>
    <div>


    </div>
@endsection

