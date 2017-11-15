@extends('layouts.master')
@section('title','Supplier')
@section('content')

<div>
    @include('common.errors')

    <form action="store" method="post" class="bootstrap-frm">
        {{ csrf_field() }}
        <div id="main" class="container">
            <h2 id="elements">供應商</h2>
            <div>
                <form method="post" action="#">
                    <div class="row uniform">
                        <div class="4u 12u$(small)">
                            <input type="text" name="query" id="query" value="" placeholder="Query" />
                        </div>
                        <div class="3u$ 12u$(small)">
                            <a href="{{route('search')}}" class="button icon fa-search">Search</a>
                        </div>
                    </div>
                </form>
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th></th>
                            <th>供應商編號</th>
                            <th>供應商</th>
                            <th>連絡人</th>
                            <th>連絡人職稱</th>
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
                        <tr>
                            <td><input type="checkbox" id="S001" name="S001"><label for="S001"></label></td>
                            <td>S001</td>
                            <td>A股份有限公司</td>
                            <td>劉一</td>
                            <td>業務</td>
                            <td>41173</td>
                            <td>台中市太平區七星</td>
                            <td></td>
                            <td></td>
                            <td>0987987987</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="S002" name="S002"><label for="S002"></label></td>
                            <td>S002</td>
                            <td>B股份有限公司</td>
                            <td>陳二</td>
                            <td>業務</td>
                            <td>41160</td>
                            <td>台中市太平區大源九街</td>
                            <td></td>
                            <td></td>
                            <td>0978978978</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="S003" name="S003"><label for="S003"></label></td>
                            <td>S003</td>
                            <td>C股份有限公司</td>
                            <td>張三</td>
                            <td>業務</td>
                            <td>41160</td>
                            <td>台中市太平區大源二十二街</td>
                            <td></td>
                            <td></td>
                            <td>0987432097</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="S004" name="S004"><label for="S004"></label></td>
                            <td>S004</td>
                            <td>D股份有限公司</td>
                            <td>李四</td>
                            <td>業務</td>
                            <td>41174</td>
                            <td>台中市太平區大源二十六街</td>
                            <td></td>
                            <td></td>
                            <td>0987432096</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="S005" name="S005"><label for="S005"></label></td>
                            <td>S005</td>
                            <td>E股份有限公司</td>
                            <td>王五</td>
                            <td>業務</td>
                            <td>41152</td>
                            <td>台中市太平區大興八街</td>
                            <td></td>
                            <td></td>
                            <td>0987432098</td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <ul class="actions" align="right">
                        <a href="#" class="button special">新增</a>
                        <a href="#" class="button special">修改</a>
                        <a href="#" class="button">刪除</a>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

