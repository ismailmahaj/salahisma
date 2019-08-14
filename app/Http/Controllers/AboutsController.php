<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = about::all();
        return view('admin.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new about([
            'title' => $request->get('title'),
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'resume' => $request->get('resume'),
            'localisation' => $request->get('localisation'),
            'experience' => $request->get('experience'),
            'project' => $request->get('project'),


        ]);

        $about->save();
        return redirect('/admin/about')->with("success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = about::find($id);
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about = about::find($id);

         $about->title =  $request->get('title');
         $about->name  =  $request->get('name');
         $about->description  = $request->get('description');
         $about->resume  = $request->get('resume');
         $about->localisation  = $request->get('localisation');
         $about->experience  = $request->get('experience');
         $about->project   = $request->get('project');

        $about->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = about::find($id);
        $about->delete();
        echo "project a étais suprimé";
    }
}
