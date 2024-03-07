<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addCat extends Controller
{
    public function index(Request $request)
    {
        $cat = ['3aa'];
        return response()->json($cat);
    }
}
