<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class Test extends Controller
{
    //

    public function index(){
        $blogs =  Content::get();
        // return $blog;
        return view('pages.home', [
            'title' => 'Landing Page',
            'blogs' => $blogs
        ]);
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'editor' => 'required',
            'title' => 'required',
            'cover' => 'required',
            'category' => 'required',
        ]);

      
        $content = $request->input('editor');
        if ($image = $request->file('cover')) {
            $destinationPath = 'cover_images/';
            $cover = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $cover);
            // $image = DB::table('abouts')->find($id);
            // File::delete("images/".$image->image);
            Content::create([
                'title' => $request->title,
                'cover' =>  $cover,
                'content' => $content,
                'category' => $request->category,        
             ]);

        }
        return redirect()->route('test.index')
        ->with('success','Successfully');
    }
}
