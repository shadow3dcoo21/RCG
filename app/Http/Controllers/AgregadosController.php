<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgregadosController extends Controller
{
    public function index()
    {
        return view('agregados');
    }
}
