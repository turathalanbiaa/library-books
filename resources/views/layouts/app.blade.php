<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>المكتبة</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/nav-fixed.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
    .box-books
    {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<body style="overflow-x: hidden">
    <div id="app">
        <div class="container-fluid con-op">
            <div class="row">
                <div class="col-sm-3 col-lg-2">
                    <nav class="nav navbar navbar-default navbar-fixed-side">
                        <div class="container-fluid">
                            <div class="navbar-header" style="background-color: #2a88bd;">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="/" style="color: floralwhite; font-size: 25px;margin-right: 20%">الصفحة الرئيسية</a>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav">
                                    <li style="font-size: 22px"><a href="{{route('main')}}">جميع الكتب</a></li>
                                    @foreach($getCategories as $category)
                                        <li class="" style="font-size: 22px"><a href="{{route('category',array('CategoryID'=>$category->CategoryID))}}">{{$category->CategoryID}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-sm-7 col-md-7 col-md-offset-1" style="margin-bottom: 2%">
                    @yield('content')
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-fixed-bottom" style="height: 2px; ">
                        <div class="container-fluid" style="background-color: #2aabd2">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#" style="color: black">المكتبة الالكترونية</a>
                            </div>
                            <ul class="nav navbar-nav" style="font-size: 18px">
                                <li class="active"><a href="#" style="color: black">الموقع الرئيسي للمعهد</a></li>
                                <li><a href="#" style="color: black">موقع اقلام للتدوين</a></li>
                                <li><a href="#" style="color: black">موقع مباحثات طلابية</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>
