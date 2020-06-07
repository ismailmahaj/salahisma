<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = Storage::disk('images')->put('',$request->file('image'));
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->contenu = $request->contenu;  // Quand j'utilise "content" au lieu de "contenu" sa me génère un bug
        $blog->cat = $request->cat;
        $blog->image = $path;
        $blog->save();
        return redirect('blogs');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blog/edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        Storage::disk('images')->delete($blog->imgage);
        $path = Storage::disk('images')->put('',$request->file('image'));
        $blog->title = $request->title;
        $blog->contenu = $request->contenu;
        $blog->cat = $request->cat;
        $blog->image = $path;
        $blog->save();
        return redirect('/blogs');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        Storage::disk('images')->delete($blog->image);
        $blog->delete();
        return  redirect('/blogs');
    }
}
