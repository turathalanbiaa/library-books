@extends('layouts.app')
@section('content')
    @foreach($search as $book)
        <div class="row" style="margin-bottom: 1%">
            <div class="col-sm-8 box-books" style="background-color: #f9f9f9;padding: 10px 5px 10px 5px; border-top: 5px solid #5cb85c">
                <div class="row">
                    <div class="col-md-3">
                        <div>
                            <img src="/63771-1475874294-7.jpg" style =" width: 100%; border: 2px solid #2aabd2">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div>
                            <p style="font-size: 20px">{{$book->BookName}}</p>
                            <p><span class="fa fa-chevron-left"></span> المؤلف : <a href="#">{{$book->AuthorID}}</a></p>
                            <p><span class="fa fa-chevron-left"></span> التصنيف : <strong style="color: #2aabd2">>{{$book->CategoryID}}</strong></p>
                            @if($book->Volume)
                                <a type="button" href="{{route('parts',array('bookName'=>$book->BookName,'categoryID'=>$book->CategoryID))}}" class="btn btn-info">اجزاء الكتاب</a>
                            @else()
                                <a class="btn btn-success">تحميل الكتاب</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection