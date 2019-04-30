<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function photos()
    {
        return view('photos');
    }

    public function blog()
    {
        return view('blog');
    }

    public function nosotros($name = null)
    {
        $persons = ['Andres', 'Orimar'];

        return view('nosotros', compact('persons', 'name'));
    }
}
