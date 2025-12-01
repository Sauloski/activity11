<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function inicio(): View
    {
        return view('inicio');
    }

    public function fotos(): View
    {
        return view('fotos');
    }

    public function contacto(): View
    {
        return view('contacto');
    }
}