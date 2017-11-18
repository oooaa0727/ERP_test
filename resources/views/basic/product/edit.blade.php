@extends('layouts.master')
@section('title','Product')
@section('content')

    <div class="col-md-8 col-md-offset-2">
        @include('common.errors')
        <div class="panel-heading">
            <h1>庫存產品</h1>
        </div>
        <form action="{{ route('product.create')}}" method="post" class="bootstrap-frm">
            {{ csrf_field() }}
            <div id="main" class="container">


                /*庫存產品編號*/

                <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                    <label for="id" class="col-md-4 control-label">ID</label>

                    <div class="col-md-6">
                        <input id="id" readonly type="text" class="form-control" name="id" value="{{ old('id') }}" required autofocus>

                        @if ($errors->has('id'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                /*庫存產品名稱*/

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                /*規格*/

                <div class="form-group{{ $errors->has('spec') ? ' has-error' : '' }}">
                    <label for="spec" class="col-md-4 control-label">spec</label>

                    <div class="col-md-6">
                        <input id="spec" type="text" class="form-control" name="spec" value="{{ old('spec') }}" required >

                        @if ($errors->has('spec'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('spec') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                /*單位*/

                <div class="form-group{{ $errors->has('unit') ? ' has-error' : '' }}">
                    <label for="unit" class="col-md-4 control-label">Unit</label>

                    <div class="col-md-6">
                        <select name="unit"  >
                            　<option value="bale">包</option>
                            　<option value="block">塊</option>
                            　<option value="kilogram">公斤</option>
                            　<option value="carton">箱</option>
                            <option value="piece">個</option>
                        </select>

                        @if ($errors->has('unit'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('unit') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                /*進價*/

                <div class="form-group{{ $errors->has('purchasePR') ? ' has-error' : '' }}">
                    <label for="purchasePR" class="col-md-4 control-label">purchasePR</label>

                    <div class="col-md-6">
                        <input id="purchasePR" type="text" class="form-control" name="purchasePR" value="{{ old('purchasePR') }}" required >

                        @if ($errors->has('purchasePR'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('purchasePR') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                /*售價*/

                <div class="form-group{{ $errors->has('salesPR') ? ' has-error' : '' }}">
                    <label for="salesPR" class="col-md-4 control-label">salesPR</label>

                <div class="col-md-6">
                    <input id="salesPR" type="text" class="form-control" name="salesPR" value="{{ old('salesPR') }}" required >

                    @if ($errors->has('salesPR'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('salesPR') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


                /*供應商*/

                <div class="form-group{{ $errors->has('supplier') ? ' has-error' : '' }}">
                    <label for="supplier" class="col-md-4 control-label">supplier</label>

                    <div class="col-md-6">
                        <select name="supplier"  >
                            　<option value="1">A股份有限公司</option>
                            　<option value="2">B股份有限公司</option>
                            　<option value="3">C股份有限公司</option>
                            　<option value="4">D股份有限公司</option>
                            <option value="5">E股份有限公司</option>
                        </select>

                        @if ($errors->has('supplier'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('supplier') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>



                /*庫存量*/

                <div class="form-group{{ $errors->has('inventory') ? ' has-error' : '' }}">
                    <label for="inventory" class="col-md-4 control-label">inventory</label>

                    <div class="col-md-6">
                        <input id="inventory" type="text" class="form-control" name="inventory" value="{{ old('inventory') }}" required >

                        @if ($errors->has('inventory'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('inventory') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>



                <ul class="actions" align="right">
                    <a href="#"class="button special">新增</a>

                    <a href="{{route('product.recall')}}" class="button">取消</a>
                </ul>


            </div>
        </form>
    </div>
@endsection