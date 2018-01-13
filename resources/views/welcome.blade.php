@extends('layouts.app')
<style>
    .otto {
        color: #ffffff;
        text-shadow: 0 1px 0 #ccc,
        0 2px 0 #c9c9c9,
        0 3px 0 #bbb,
        0 4px 0 #b9b9b9,
        0 5px 0 #aaa,
        0 6px 1px rgba(0,0,0,.1),
        0 0 5px rgba(0,0,0,.1),
        0 1px 3px rgba(0,0,0,.3),
        0 3px 5px rgba(0,0,0,.2),
        0 5px 10px rgba(0,0,0,.25),
        0 10px 10px rgba(0,0,0,.2),
        0 20px 20px rgba(0,0,0,.15);
    }
    body {
        font-family: 'Cairo', sans-serif;
        background: url(cover.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .con-op {
        background-color: rgba(0,0,0,0.6); height: 100%
    }

</style>
@section('content')
            <div style="text-align: center; color: #f9f9f9">
                <p class="otto wow zoomIn" data-wow-delay="1s" style="font-size: 45px; margin-top:  40%">  معهـــد تــــراث الانــبيــاء (عليهم السلام)</p>
                <p class="otto wow zoomIn" data-wow-delay="2s" style="font-size: 45px;">للدراسات الحوزوية </p>
                <div class="row">
                    <div class="col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
                        <form method="get" action="/search">
                            {{csrf_field()}}
                            <div class="input-group wow zoomIn" data-wow-delay="3s">
                                <input type="text" name="search" style="height: 41px" class="form-control" placeholder="بحث عن كتاب">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search fa-2x" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection