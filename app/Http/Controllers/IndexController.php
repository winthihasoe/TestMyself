<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
        return view('index');
    }

    function postData(Request $req){
        $username=$req->userName;
        $comment=$req->comment;
        
        return back()->with("message","$username is write '$comment' on your website.");
    }
}
