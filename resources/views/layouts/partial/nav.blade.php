
<nav id="menu">
    <ul class="links">

        <li><a href="{{route('index')}}">首頁</a></li>

        <li><a>基本資料</a>
         
                 <a class="lc" href="{{route('supplier.index')}}">供應商</a>
                 <a class="lc" href="{{route('customer.index')}}">一般客戶</a>
                 <a class="lc" href="{{route('manufacturer.index')}}">營造工程</a>
                 <a class="lc" href="{{route('product.index')}}">庫存產品</a>
                 <a class="lc" href="{{route('purchase')}}">進貨單</a>
                 <a class="lc" href="{{route('sales')}}">銷貨單</a>


        </li>


        <li><a href="{{route('service')}}">服務</a></li>

        <lil><a href="{{route('setting')}}">設定</a>

            <ol class="hidden">
                 <a class="lc" href="#">修改密碼</a>
                 <a class="lc" href="#">安全存量</a>
            </ol>

         </lil>
    </ul>
</nav>
