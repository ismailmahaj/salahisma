<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BackgroundImage;
use Illuminate\Support\Facades\DB;

class AccueilController extends Controller
{
    public function index()
    {
        $weAre = array("dev","Young",'graph');
        $background = BackgroundImage::find(1);
        return view('accueil.index',compact('background','weAre'));
    }
}
