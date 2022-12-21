<?php

namespace App\Http\Controllers;
use App\Content;
use Illuminate\Http\Request;

class JavascriptController extends Controller
{
    //
    public function index(){
        $blogs =  Content::get()->where('category', 'javascript');
        $populers = Content::orderBy('views', 'DESC')->take(3)->get();
        return view('pages.blog_js',[
            'title' => 'Blog Javascript',
            'blogs_js' => $blogs,
            'populers' => $populers,
            'active' => 'javascript'
        ]);
    }
}
