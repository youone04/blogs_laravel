<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class Test extends Controller
{
    //

    public function index(){
        $blogs =  Content::get('content');
        // return $blog;
        return view('pages.home', [
            'blogs' => $blogs
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'editor' => 'required',
            'title' => 'required',
            'cover' => 'required',
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
             ]);

        }
        return redirect()->route('test.index')
        ->with('success','Successfully');
    }
}
