<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interest;
class InterestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interests = Interest::all();
        return view ('admin.interest.index', compact('interests'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.interest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $interest = new Interest([
            'name' => $request->get('name'),
            'classeIcone' => $request->get('classeIcone'),
        ]);
        $interest->save();
        return redirect('/admin/interest');
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
        $interest = Interest::find($id);
        return view('admin.interest.edit', compact('interest'));
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
        $interest = Interest::find($id);
        $interest->name = $request->get('name');
        $interest->save();
        return redirect('admin/interest')->with("succes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $interest = Interest::find($id);
        $interest->delete();
        echo "project a étais suprimé";
    }
}
