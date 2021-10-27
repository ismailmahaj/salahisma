<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class PdfFileController extends Controller
{
    public function GetPdf($fileName)
    {
           
    $file= public_path(). "/".$fileName;

    $headers = array(
              'Content-Type: application/pdf',
            );

    return Response::download($file, $fileName, $headers);
    }
}
