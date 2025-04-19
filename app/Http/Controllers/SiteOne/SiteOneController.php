<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteOneController extends Controller
{
    function home() {
        echo '<h1>home</h1>' ;
    }

    function about() {
        echo'<h1>about</h1>';
    }

    function contact() {
        echo'<h1>contact</h1>';
    }
    function msg($id = null) {
        return view('pages1.msg')->with('id' , $id) ;
    }


}

    // function msg($id = null){

    //     return view('pages1.msg', ['id' =>$id]); }























