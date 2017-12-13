@extends('layouts.master')
@section('title','Customer')
@section('content')

    <div>
        @include('common.errors')

        <form action="#" method="post" class="bootstrap-frm">
            {{ csrf_field() }}
            <div id="main" class="container">
                <h2 id="elements">一般客戶</h2>
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
                                <th>客戶編號</th>
                                <th>客戶姓名</th>
                                <th>郵遞區號</th>
                                <th>地址</th>
                                <th>電話</th>
                                <th>傳真</th>
                                <th>手機</th>
                                <th>統一編號</th>
                                <th>電子信箱</th>
                            </tr>
                            </thead>
                            <tbody>


                            @if(isset($customers))

                                @foreach($customers as $customer)
                                    <tr>
                                        <td><input type="checkbox" id="checkbox" name="checkbox"  ><label for="{{$customer->id}}"></label></td>

                                        <td>{{ $customer->cid }}</td>
                                        <td>{{ $customer->name }}</td>


                                        <td>{{ $customer->postal }}</td>
                                        <td>{{ $customer->address }}</td>
                                        <td>{{ $customer->phone}}</td>
                                        <td>{{ $customer->fax }}</td>
                                        <td>{{ $customer->cellphone }}</td>
                                        <td>{{ $customer->TaxID }}</td>
                                        <td>{{ $customer->email }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        @endif
                        <ul class="actions" align="right">
                            <a href="{{route('customer.create')}}"class="button special">新增</a>
                            <a href="#" class="button special">修改</a>
                            <a href="#" class="button">刪除</a>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

