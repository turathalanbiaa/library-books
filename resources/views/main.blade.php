@extends('layouts.app')
@section('content')
    @foreach($getAllBooks as $book)
        <div class="row" style="margin-bottom: 1%">
            <div class="col-sm-11 col-md-8 box-books" style="background-color: #f9f9f9;padding: 10px 5px 10px 5px; border-top: 5px solid #5cb85c">
                <div class="row">
                    <div class="col-sm-3">
                        <div>
                            <img src="http://hz.turathalanbiaa.com/public/{{$book->No}}.jpg" style =" width: 100%; border: 2px solid #2aabd2">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div>
                            <p style="font-size: 20px">{{$book->BookName}}</p>
                            <p><span class="fa fa-chevron-left"></span> المؤلف : <strong style="color: #2aabd2">{{$book->AuthorID}}</strong></p>
                            <p><span class="fa fa-chevron-left"></span> التصنيف : <strong style="color: #2aabd2">{{$book->CategoryID}}</strong></p>
                            @if($book->Volume>0)
                            <a type="button" href="{{route('parts',array('bookName'=>$book->BookName,'categoryID'=>$book->CategoryID))}}" class="btn btn-info">تصفح اجزاء الكتاب</a>
                            <a type="button" href="http://hz.turathalanbiaa.com/public/{{$book->No}}.zip" class="btn btn-success">تحميل الكل</a>
                            @else()
                            <a class="btn btn-success" href="http://hz.turathalanbiaa.com/public/{{$book->No}}.pdf">تحميل الكتاب</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{$getAllBooks->links()}}
@endsection