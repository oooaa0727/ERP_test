@extends('layouts.master')
@section('title','Manufacturer')
@section('content')

    <div>
        @include('common.errors')

        <form action="#" method="post" class="bootstrap-frm">
            {{ csrf_field() }}
            <div id="main" class="container">
                <h2 id="elements">營造工程</h2>
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
                                <th>營造編號</th>
                                <th>營造名稱</th>
                                <th>負責人</th>
                                <th>負責人職稱</th>
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



                            @if(isset($manufacturers))
                                @foreach($manufacturers as $manufacturer)
                                    <tr>
                                        <td><input type="checkbox" id="{{$manufacturer->id}}" name="index"></td>
                                        <td>{{ $manufacturer->mid }}</td>
                                        <td>{{ $manufacturer->name }}</td>
                                        <td>{{ $manufacturer->POC }}</td>
                                        <td>{{ $manufacturer->contact }}</td>
                                        <td>{{ $manufacturer->postal }}</td>
                                        <td>{{ $manufacturer->address }}</td>
                                        <td>{{ $manufacturer->phone}}</td>
                                        <td>{{ $manufacturer->fax }}</td>
                                        <td>{{ $manufacturer->cellphone }}</td>
                                        <td>{{ $manufacturer->TaxID }}</td>
                                        <td>{{ $manufacturer->email }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        @endif
                        <ul class="actions" align="right">
                            <a href="{{route('manufacturer.create')}}"class="button special">新增</a>
                            <a href="#" class="button special">修改</a>
                            <a href="#" class="button">刪除</a>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

