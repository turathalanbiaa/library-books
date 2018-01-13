<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexControoller extends Controller
{
    function  getCategory ()
    {
        $getCategories = DB::table('books')
            ->select('CategoryID')
            ->where('CategoryID','!=', '')
            ->groupBy('CategoryID')
            ->get();
        return $getCategories;
    }
    function view ()
    {

        $getAllBooks = Book::paginate(12);
        return view ('welcome',array('getCategories'=>$this->getCategory(),'getAllBooks'=>$getAllBooks)) ;
    }
    function main (){
        $getAllBooks = Book::where('Volume','<',2)->paginate(12);
        return view ('main',array('getCategories'=>$this->getCategory(),'getAllBooks'=>$getAllBooks)) ;
    }
    function getBooksByCategory ($CategoryID)
    {
        $getBooksByCategory = Book::where('CategoryID',$CategoryID)->where('Volume','<',2)->paginate(12);
        return view ('category',array('getBooksByCategory'=>$getBooksByCategory,'getCategories'=>$this->getCategory())) ;
    }

    function search (Request $request)
    {
        $search = $request->input('search');
        $category = DB::table('books')
            ->where('CategoryID', 'LIKE', '%'.$search.'%')
            ->where('Volume','<',2);
        $author = DB::table('books')
            ->where('AuthorID', 'LIKE', '%'.$search.'%')
            ->where('Volume','<',2);
        $search = DB::table('books')->where('Volume','<',2)->where('BookName', 'LIKE', '%'.$search.'%')
            ->union($category)
            ->union($author)->get();
        return view('search',array('search'=>$search,'getCategories'=>$this->getCategory()));
    }
    function getParts ($bookName , $categoryID)
    {
        $parts = Book::where('BookName',$bookName)->where('CategoryID',$categoryID)->orderBy('Volume')->get();
        return view('parts',array('parts'=>$parts,'getCategories'=>$this->getCategory()));
    }
}
