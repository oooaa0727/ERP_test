<html>
@include('layouts.partial.head')

    <title>@yield('title')|ERP</title>
<!-- Stylesheet -->


<link href="{{ asset('css/main.css') }}" rel="stylesheet">

<!-- Scripts -->

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.scrolly.min.js')}}"></script>
<script src="{{asset('js/jquery.scrollex.min.js')}}"></script>
<script src="{{asset('js/skel.min.js')}}"></script>
<script src="{{asset('js/util.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>



<body>
@include('layouts.partial.nav')

    @yield('content')

</body>
</html>