@extends('layouts.master')
@section('title','Product')
@section('content')

    <div>
        @include('common.errors')

        <form action="#" method="post" class="bootstrap-frm">
            {{ csrf_field() }}
            <div id="main" class="container">
                <h2 id="elements">庫存產品</h2>
                <div>
                    <form method="post" action="#">
                        <div class="row uniform">
                            <div class="4u 12u$(small)">
                                <input type="text" name="query" id="query" value="" placeholder="Query" />
                            </div>
                            <div class="3u$ 12u$(small)">
                                <a href="#" class="button icon fa-search">Search</a>
                            </div>
                        </div>
                    </form>
                    <div class="table-wrapper">
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th>品名編號</th>
                                <th>品名</th>
                                <th>規格</th>
                                <th>單位</th>
                                <th>進價</th>
                                <th>售價</th>
                                <th>供應商</th>
                                <th>庫存量</th>
                                <th>安全存量</th>
                                <th>停售日期</th>
                            </tr>
                            </thead>
                            <tbody>


                            @if(isset($suppliers))

                                @foreach($suppliers as $supplier)
                                    <tr>
                                        <td><input type="checkbox" id="{{$id}}" name="index">
                                        <td>{{ $id }}</td>
                                        <td>{{ $name }}</td>
                                        <td>{{ $POC }}</td>
                                        <td>{{ $contact }}</td>
                                        <td>{{ $postal }}</td>
                                        <td>{{ $address }}</td>
                                        <td>{{ $phone}}</td>
                                        <td>{{ $fax }}</td>
                                        <td>{{ $cellphone }}</td>
                                        <td>{{ $TaxID }}</td>
                                        <td>{{ $email }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        @endif
                        <ul class="actions" align="right">
                            <a href="{{route('product.create')}}"class="button special">新增</a>
                            <a href="#" class="button special">修改</a>
                            <a href="#" class="button">刪除</a>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

