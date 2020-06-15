<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\BackgroundImage;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class BackgroundImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backGround_crud/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $background = new BackgroundImage();

        $path = Storage::disk('images')->put('', $request->file('image'));
        $background->image = $path;

        $background->agencyName = $request->agencyName;
        $background->save();
     


        return redirect('accueil');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BackgroundImage  $backgroundImage
     * @return \Illuminate\Http\Response
     */
    public function show(BackgroundImage $backgroundImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BackgroundImage  $backgroundImage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $background = BackgroundImage::findOrFail($id);

        return  view('background_crud/edit',compact('background'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BackgroundImage  $backgroundImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BackgroundImage $backgroundImage)
    {

        Storage::disk('images')->delete($backgroundImage->image);
        $backgroundImage->agencyName = $request->agencyName;
        $path = Storage::disk('images')->put('', $request->file('image'));
        $backgroundImage->image = $path;
        $backgroundImage->save();
        return redirect('accueil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BackgroundImage  $backgroundImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(BackgroundImage $backgroundImage)
    {
        Storage::disk('images')->delete($backgroundImage->image);

        $backgroundImage->delete();
        return redirect('accueil');
    }
}
