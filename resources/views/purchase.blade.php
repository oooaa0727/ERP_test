@extends('layouts.master')
@section('title','Purchase')
@section('content')
    <!-- Main -->
    <div id="main" class="container">
        <h2 id="elements">進貨主檔</h2>
        <div>
            <ul class="actions">
                <li><a href="#A股份有限公司" class="button special">A股份有限公司</a></li>
                <li><a href="#B股份有限公司" class="button special">B股份有限公司</a></li>
                <li><a href="#C股份有限公司" class="button special">C股份有限公司</a></li>
                <li><a href="#D股份有限公司" class="button special">D股份有限公司</a></li>
                <li><a href="#E股份有限公司" class="button special">E股份有限公司</a></li>
            </ul>

            <h3 id="A股份有限公司">A股份有限公司</h3>
            <ol>
                <table>
                    <thead>
                    <tr>
                        <th>進貨主檔編號</th>
                        <th>進貨明細編號</th>
                        <th>供應商編號</th>
                        <th>總金額</th>
                        <th>已付金額</th>
                        <th>尚未繳清金額</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>MP001</td>
                        <td><a href="DP001.html" style="color:white">DP001</a></td>
                        <td>S001</td>
                        <td>10000</td>
                        <td>10000</td>
                        <td>0</td>
                    </tr></div>
        <tr>
            <td>MP002</td>
            <td><a href="DP003.html" style="color:white">DP003</a></td>
            <td>S001</td>
            <td>1000</td>
            <td>1000</td>
            <td>0</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3"></td>
            <td>11000</td>
            <td>11000</td>
            <td>0</td>
        </tr>
        </tfoot>
        </table>
        </ol><br>

        <h3 id="B股份有限公司"><hr>B股份有限公司</h3>
        <ol>
            <table>
                <thead>
                <tr>
                    <th>進貨主檔編號</th>
                    <th>進貨明細編號</th>
                    <th>供應商編號</th>
                    <th>總金額</th>
                    <th>已付金額</th>
                    <th>尚未繳清金額</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>MP003</td>
                    <td><a href="DP007.html" style="color:white">DP007</a></td>
                    <td>S002</td>
                    <td>2500</td>
                    <td>2000</td>
                    <td>500</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3"></td>
                    <td>2500</td>
                    <td>2000</td>
                    <td>500</td>
                </tr>
                </tfoot>
            </table>
        </ol><br>

        <h3 id="D股份有限公司"><hr>D股份有限公司</h3>
        <ol>
            <table>
                <thead>
                <tr>
                    <th>進貨主檔編號</th>
                    <th>進貨明細編號</th>
                    <th>供應商編號</th>
                    <th>總金額</th>
                    <th>已付金額</th>
                    <th>尚未繳清金額</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>MP004</td>
                    <td><a href="DP010.html" style="color:white">DP010</a></td>
                    <td>S004</td>
                    <td>2500</td>
                    <td>2500</td>
                    <td>0</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3"></td>
                    <td>2500</td>
                    <td>2500</td>
                    <td>0</td>
                </tr>
                </tfoot>
            </table>
        </ol><br>

        <h3 id="E股份有限公司"><hr>E股份有限公司</h3>
        <ol>
            <table>
                <thead>
                <tr>
                    <th>進貨主檔編號</th>
                    <th>進貨明細編號</th>
                    <th>供應商編號</th>
                    <th>總金額</th>
                    <th>已付金額</th>
                    <th>尚未繳清金額</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>MP005</td>
                    <td><a href="DP018.html" style="color:white">DP018</a></td>
                    <td>S005</td>
                    <td>3000</td>
                    <td>3000</td>
                    <td>0</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3"></td>
                    <td>3000</td>
                    <td>3000</td>
                    <td>0</td>
                </tr>
                </tfoot>
            </table>
        </ol>
    </div>
    </div>

@endsection
