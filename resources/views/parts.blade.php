@extends('layouts.app')
@section('content')
    @foreach($parts as $book)
        <div class="row" style="margin-bottom: 1%">
            <div class="col-sm-11 col-md-8 box-books" style="background-color: #f9f9f9;padding: 10px 5px 10px 5px; border-top: 5px solid #5cb85c">
                <div class="row">
                    <div class="col-sm-3">
                        <div>
                            <img src="/63771.jpg" style =" width: 100%; border: 2px solid #2aabd2">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div>
                            <p style="font-size: 20px">{{$book->BookName}}</p>
                            <p><span class="fa fa-chevron-left"></span> المؤلف : <a href="#">{{$book->AuthorID}}</a></p>
                            <p><span class="fa fa-chevron-left"></span> التصنيف : <strong style="color: #2aabd2">{{$book->CategoryID}}</strong></p>
                            <p><span class="fa fa-chevron-left"></span> التصنيف : <strong style="color: #2aabd2">{{$book->Volume}}</strong></p>
                            <a type="button" class="btn btn-success" href="http://hz.turathalanbiaa.com/public/{{$book->No}}.pdf">تحميل الكتاب</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection