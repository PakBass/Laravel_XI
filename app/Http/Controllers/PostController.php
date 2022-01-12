<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
         return view('index', [
            "title"     => "Laravel | Home"
        ]);
    }

    public function about()
    {
         return view('about', [
            "title"     => "Laravel | About"
        ]);
    }

    public function blog_berita()
    {
        return view('news', [
            "title"     => "Laravel | News",
            "post"      => Post::all()
        ]);
    }

    public function tampil($title_lain)
    {
        return view('post',[
            "title"     => "Single post",
            "post"      => Post::find($title_lain)
        ]);
    }
}
