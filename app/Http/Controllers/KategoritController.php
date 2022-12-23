<?php

namespace App\Http\Controllers;
use App\Content;
use Illuminate\Http\Request;

class KategoritController extends Controller
{
    //
    public function index($kategori){
        $blogs =  Content::get()->where('category', $kategori);
        $populers = Content::orderBy('views', 'DESC')->take(3)->get();
        return view('pages.blog_js',[
            'title' => 'Blog '.$kategori,
            'blogs_js' => $blogs,
            'populers' => $populers,
            'active' => $kategori
        ]);
    }
}
