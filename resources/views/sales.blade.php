@extends('layouts.master')
@section('title','Sales')
@section('content')
    <!-- Main -->
    <div id="main" class="container">
        <h2 id="elements">銷貨主檔</h2>
        <div>
            <ul class="actions">
                <li><a class="button special">一般客戶</a></li>
                <ol class="hidden">
                    <br><li><a href="#鄰俊傑" class="button special">鄰俊傑</a></li>
                    <li><a href="#蕭敬疼" class="button special">蕭敬疼</a></li>
                    <li><a href="#周杰輪" class="button special">周杰輪</a></li>
                    <li><a href="#張惠媚" class="button special">張惠媚</a></li>
                    <li><a href="#那陰" class="button special">那陰</a></li>
                </ol>
                <li><a class="button special">營造工程</a></li>
                <ol class="hidden">
                    <br><li><a href="#A營造股份有限公司" class="button special">A營造股份有限公司</a></li>
                    <li><a href="#B營造股份有限公司" class="button special">B營造股份有限公司</a></li>
                    <li><a href="#C營造股份有限公司" class="button special">C營造股份有限公司</a></li>
                    <li><a href="#D營造股份有限公司" class="button special">D營造股份有限公司</a></li>
                    <li><a href="#E營造股份有限公司" class="button special">E營造股份有限公司</a></li>
                </ol>
            </ul>

            <h3 id="鄰俊傑"><hr>鄰俊傑</h3>
            <ol>
                <table>
                    <thead>
                    <tr>
                        <th>銷貨主檔編號</th>
                        <th>銷貨明細編號</th>
                        <th>客戶編號</th>
                        <th>營造編號</th>
                        <th>總金額</th>
                        <th>已付金額</th>
                        <th>尚未繳清金額</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>MS001</td>
                        <td><a href="DS001.html" style="color:white">DS001</a></td>
                        <td>C001</td>
                        <td></td>
                        <td>15000</td>
                        <td>15000</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4"></td>
                        <td>15000</td>
                        <td>1500</td>
                        <td>0</td>
                    </tr>
                    </tfoot>
                </table>
            </ol><br>

            <h3 id="蕭敬疼"><hr>蕭敬疼</h3>
            <ol>
                <table>
                    <thead>
                    <tr>
                        <th>銷貨主檔編號</th>
                        <th>銷貨明細編號</th>
                        <th>客戶編號</th>
                        <th>營造編號</th>
                        <th>總金額</th>
                        <th>已付金額</th>
                        <th>尚未繳清金額</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>MS003</td>
                        <td><a href="DS007.html" style="color:white">DS007</a></td>
                        <td>C002</td>
                        <td></td>
                        <td>8000</td>
                        <td>8000</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4"></td>
                        <td>8000</td>
                        <td>8000</td>
                        <td>0</td>
                    </tr>
                    </tfoot>
                </table>
            </ol><br>

            <h3 id="周杰輪"><hr>周杰輪</h3>
            <ol>
                <table>
                    <thead>
                    <tr>
                        <th>銷貨主檔編號</th>
                        <th>銷貨明細編號</th>
                        <th>客戶編號</th>
                        <th>營造編號</th>
                        <th>總金額</th>
                        <th>已付金額</th>
                        <th>尚未繳清金額</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>MS005</td>
                        <td><a href="DS016.html" style="color:white">DS016</a></td>
                        <td>C003</td>
                        <td></td>
                        <td>6250</td>
                        <td>6250</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4"></td>
                        <td>6250</td>
                        <td>6250</td>
                        <td>0</td>
                    </tr>
                    </tfoot>
                </table>
            </ol><br>

            <h3 id="A營造股份有限公司"><hr>A營造股份有限公司</h3>
            <ol>
                <table>
                    <thead>
                    <tr>
                        <th>銷貨主檔編號</th>
                        <th>銷貨明細編號</th>
                        <th>客戶編號</th>
                        <th>營造編號</th>
                        <th>總金額</th>
                        <th>已付金額</th>
                        <th>尚未繳清金額</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>MS002</td>
                        <td><a href="DS003.html" style="color:white">DS003</a></td>
                        <td>M001</td>
                        <td></td>
                        <td>3600</td>
                        <td>3000</td>
                        <td>600</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4"></td>
                        <td>3600</td>
                        <td>3000</td>
                        <td>600</td>
                    </tr>
                    </tfoot>
                </table>
            </ol><br>

            <h3 id="B營造股份有限公司"><hr>B營造股份有限公司</h3>
            <ol>
                <table>
                    <thead>
                    <tr>
                        <th>銷貨主檔編號</th>
                        <th>銷貨明細編號</th>
                        <th>客戶編號</th>
                        <th>營造編號</th>
                        <th>總金額</th>
                        <th>已付金額</th>
                        <th>尚未繳清金額</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>MS004</td>
                        <td><a href="DS012.html" style="color:white">DS012</a></td>
                        <td>M002</td>
                        <td></td>
                        <td>9600</td>
                        <td>9600</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4"></td>
                        <td>9600</td>
                        <td>9600</td>
                        <td>0</td>
                    </tr>
                    </tfoot>
                </table>
            </ol><br>
        </div>
    </div>
@endsection
