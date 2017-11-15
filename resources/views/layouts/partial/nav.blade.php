
<nav id="menu">
    <ul class="links">

        <li><a href="{{route('index')}}">首頁</a></li>

        <li><a>基本資料</a>
            <ol class="hidden">
                 <a class="lc" href="{{route('supplier')}}">供應商</a>
                 <a class="lc" href="{{route('customer')}}">一般客戶</a>
                 <a class="lc" href="{{route('manufacturer')}}">營造工程</a>
                 <a class="lc" href="{{route('product')}}">庫存產品</a>
                 <a class="lc" href="{{route('purchase')}}">進貨單</a>
                 <a class="lc" href="{{route('sales')}}">銷貨單</a>
            </ol>

        </li>

        <li><a href="{{route('search')}}">查詢瀏覽</a></li>

        <li><a href="{{route('service')}}">服務</a></li>

        <lil><a href="{{route('setting')}}">設定</a>

            <ol class="hidden">
                 <a class="lc" href="#">修改密碼</a>
                 <a class="lc" href="#">安全存量</a>
            </ol>

         </lil>
    </ul>
</nav>
