<style>
    li 			{cursor:pointer;
        font-size:20px;}
    li:hover 	{text-decoration: underline;}

    .hidden		{display:none;}

    .lc			{font-weight:bold;
        color:orange}
    .lc:hover	{
        color:yellow;
        font-size:25px;}
</style>

<script>
    $(document).ready(function(){
        $("li").on('click',function(){
            $(this).next().toggleClass("hidden");
        });
    });
</script>
<nav id="menu">
    <ul class="links">

        <li><a href="{{route('index')}}">首頁</a></li>

        <li><a>基本資料</a>   </li>
            <ol class="hidden">

                 <a class="lc" href="{{route('supplier.index')}}">供應商</a> <br>
                 <a class="lc" href="{{route('customer.index')}}">一般客戶</a> <br>
                 <a class="lc" href="{{route('manufacturer.index')}}">營造工程</a> <br>
                 <a class="lc" href="{{route('product.index')}}">庫存產品</a> <br>
                 <a class="lc" href="{{route('purchase')}}">進貨單</a> <br>
                 <a class="lc" href="{{route('sales')}}">銷貨單</a> <br>

            </ol>


        <li><a href="{{route('service')}}">服務</a></li>



        <li><a>設定</a></li>

            <ol class="hidden">

                 <a class="lc" href="{{route('reset')}}">修改密碼</a> <br>
                 <a class="lc" href="{{route('setting')}}">安全存量</a> <br>
            </ol>


    </ul>
</nav>
