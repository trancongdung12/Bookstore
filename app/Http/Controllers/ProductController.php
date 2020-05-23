<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function addpro(Request $request){
        $title = $request->input('title');
        $author = $request->input('author');
        $price = $request->input('price');
        DB::table('book')->insert(['title'=>$title,'author'=>$author,'price'=>$price]);
        return redirect('/');
    }
    function index(){
       $arrBook = DB::table('book')->get();
       return view('home',['books'=>$arrBook]);
    }
    function delete($id){
        DB::table('book')->where('id','=',$id)->delete();
        return redirect('/');
    }
    function edit($id){
        $arrBook = DB::table('book')->where('id','=',$id)->get();
        return view('editproduct',['book'=>$arrBook]);
    }
    function update(Request $request){
        $id = $request->input('id');
        $title = $request->input('title');
        $author = $request->input('author');
        $price = $request->input('price');
        DB::table('book')->where('id','=',$id)->update(['title'=>$title,'author'=>$author,'price'=>$price]);
        return redirect('/');
    }
}
