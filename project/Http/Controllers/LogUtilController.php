<?php

namespace Devnav2902\LogUtil\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogUtilController extends Controller
{
    public function index(Request $request)
    {
        return view('devnav2902::index');
    }
}
