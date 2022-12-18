<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Content;
class HomeController extends Controller
{
    //
    public function index(){
        $blogs =  Content::get();
        return view('pages.home',[
            'blogs' => $blogs
        ]);
    }
}
