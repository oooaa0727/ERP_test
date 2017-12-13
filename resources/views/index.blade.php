
@extends('layouts.master')
@section('title','Home')
@section('content')
    <!-- Banner -->
    <!-- Note: To show a background image, set the "data-bg" attribute below to the full filename of your image. This is used in each section to set the background image. -->
   

<section id="banner" class="bg-img" data-bg="banner.jpg">
    <div class="inner">
        <header>
            <h1>建材行ERP系統</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

        </header>
    </div>
    <a href="#one" class="more">Learn More</a>
</section>

<!-- One -->
<section id="one" class="wrapper post bg-img" data-bg="banner2.jpg">
    <div class="inner">
        <article class="box">
            <header>
                <h2>未入庫產品</h2>
                <p>以向供應商訂貨，尚未入庫之產品</p>
            </header>
            <div class="content">
                <p>此處資料將由系統自行判定，與資料庫連動，將資訊直接呈現至此處，順序由上到下，時間由遠到進<br>
                    此處有資料欄位包括<br>
                    進貨明細編號、訂貨日期、品名、數量、供應商</p>
            </div>
            <footer>
                <a href="generic.html" class="button alt">Learn More</a>
            </footer>
        </article>
    </div>
    <a href="#two" class="more">Learn More</a>
</section>

<!-- Two -->
<section id="two" class="wrapper post bg-img" data-bg="banner3.jpg">
    <div class="inner">
        <article class="box">
            <header>
                <h2>未銷售產品</h2>
                <p>以向顧客接單，尚未銷售之產品</p>
            </header>
            <div class="content">
                <p>此處資料將由系統自行判定，與資料庫連動，將資訊直接呈現至此處，順序由上到下，時間由遠到進<br>
                    此處有資料欄位包括<br>
                    銷貨明細編號、接單日期、品名、數量、送貨地址、一般客戶、營造工程</p>
            </div>
            <footer>
                <a href="generic.html" class="button alt">Learn More</a>
            </footer>
        </article>
    </div>
    <a href="#three" class="more">Learn More</a>
</section>

<!-- Three -->
<section id="three" class="wrapper post bg-img" data-bg="banner4.jpg">
    <div class="inner">
        <article class="box">
            <header>
                <h2>現在持有庫存</h2>
                <p>將所有產品簡單列出</p>
            </header>
            <div class="content">
                <p>此處資料將由系統自行讀取，與資料庫連動，將資訊直接呈現至此處<br>
                    此處有資料欄位包括<br>
                    品名編號、品名、規格、庫存量</p>
            </div>
            <footer>
                <a href="generic.html" class="button alt">Learn More</a>
            </footer>
        </article>
    </div>
    <a href="#four" class="more">Learn More</a>
</section>

<!-- Four -->
<section id="four" class="wrapper post bg-img" data-bg="banner5.jpg">
    <div class="inner">
        <article class="box">
            <header>
                <h2>安全庫存數量</h2>
                <p>將所有低於安全庫存數量的產品全部列出</p>
            </header>
            <div class="content">
                <p>此處資料將由系統自行判定，與資料庫連動，將資訊直接呈現至此處，順序由上到下，數量由少到多<br>
                    此處有資料欄位包括<br>
                    品名編號、品名、規格、庫存量、安全存量、供應商</p>
            </div>
            <footer>
                <a href="generic.html" class="button alt">Learn More</a>
            </footer>
        </article>
    </div>
</section>
@endsection
