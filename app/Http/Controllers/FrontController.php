<?php

namespace App\Http\Controllers;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Blog;


class FrontController extends Controller
{
    public function showRessources()
    {
        $blogs = Blog::all();
        $portfolios = Portfolio::all();
        return view('welcome',compact('blogs','portfolios'));
    }

    public function showBlog($id)
    {

        $blog = Blog::find($id);
        dd($blog);
        return view('single-blog',compact('blog'));
    }

}
