@extends('layouts.master')
@section('title','Customer')
@section('content')

    <form action="" method="post" class="bootstrap-frm">
        {{ csrf_field() }}
        <h1>Customer Form
            <span>Please fill all the texts in the fields.</span>
        </h1>
        <label>
            <span>一般客戶 :</span>
            <input id="C_name" type="text" name="name" placeholder="Customer Name" />
        </label>
        <label>
            <span>統一編號 :</span>
            <input id="C_Tax ID" type="text" name="name" placeholder="22555003" />
        </label>

        <label>
            <span>郵遞區號 :</span>
            <input id="C_postal" type="text" name="name" placeholder="123" />
        </label>
        <label>
            <span>地址 :</span>
            <input id="C_address" type="text" name="name" placeholder="Address" />
        </label>
        <label>
            <span>電話 :</span>
            <input id="C_phone" type="text" name="name" placeholder="04-12345678" />
        </label>
        <label>
            <span>手機 :</span>
            <input id="C_cell phone" type="text" name="name" placeholder="09XX-XXX-XXX" />
        </label>
        <label>
            <span>傳真 :</span>
            <input id="C_fax" type="text" name="name" placeholder="04-87654321" />
        </label>
        <label>
            <span>Email :</span>
            <input id="C_email" type="email" name="email" placeholder="Valid Email Address" />
        </label>

        <label>
            <span>&nbsp;</span>
            <input type="submit" class="button" value="送出" />

            <input type="Reset" class="button" value="重填" />
        </label>
    </form>
@endsection
