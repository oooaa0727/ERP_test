
@extends('layouts.master')

@section('content')
<!-- Main -->
<div id="main" class="container">
    <h2 id="elements">庫存產品變更</h2>
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
                <tr>
                    <td>P001</td>
                    <td>水泥</td>
                    <td></td>
                    <td>包</td>
                    <td class="1u 12u$(xsmall)">
                        <input type="text" name="" id="" value="" placeholder="50" />
                    </td>
                    <td class="1u 12u$(xsmall)">
                        <input type="text" name="" id="" value="" placeholder="60" />
                    </td>
                    <td>A供應商</td>
                    <td class="1u 12u$(xsmall)">
                        <input type="text" name="" id="" value="" placeholder="100" />
                    </td>
                    <td class="1u 12u$(xsmall)">
                        <input type="text" name="" id="" value="" placeholder="50" />
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>P002</td>
                    <td>地板磁磚</td>
                    <td></td>
                    <td>箱</td>
                    <td>20</td>
                    <td>25</td>
                    <td>A供應商</td>
                    <td>3000</td>
                    <td>1000</td>
                    <td></td>
                </tr>
                <tr>
                    <td>P003</td>
                    <td>外牆磁磚</td>
                    <td></td>
                    <td>箱</td>
                    <td>50</td>
                    <td>80</td>
                    <td>A供應商</td>
                    <td>2000</td>
                    <td>500</td>
                    <td></td>
                </tr>
                <tr>
                    <td>P004</td>
                    <td>砂石</td>
                    <td></td>
                    <td>米</td>
                    <td>100</td>
                    <td>150</td>
                    <td>A供應商</td>
                    <td>50</td>
                    <td>20</td>
                    <td></td>
                </tr>
                <tr>
                    <td>P005</td>
                    <td>紅磚</td>
                    <td></td>
                    <td>塊</td>
                    <td>50</td>
                    <td>80</td>
                    <td>A供應商</td>
                    <td>1000</td>
                    <td>300</td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            <ul class="actions" align="right">
                <li><input type="submit" value="確定" /></li>
                <li><input type="reset" value="取消" class="alt" /></li>
            </ul>
        </div>
    </div>
</div>
@endsection