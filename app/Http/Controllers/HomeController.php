<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Content;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        $blogs =  Content::get();
        $populers = Content::orderBy('views', 'DESC')->take(3)->get();
        return view('pages.home',[
            'title' => 'Landing Page',
            'blogs' => $blogs,
            'populers' => $populers,
            'active' => 'Home'
        ]);
    }

    public function detailBlogs($id){
        $blogs_detail = Content::where('id', $id)->first();
        Content::where('id',$id)->increment('views', 1);
        $populers = Content::orderBy('views', 'DESC')->take(3)->get();
        // return $blogs_detail;
        return view('pages.detail_blog',[
            'title' => 'Detail Blog',
            'blogs_detail' => $blogs_detail,
            'populers' => $populers,
            'active' => ''
        ]);
    }
}
