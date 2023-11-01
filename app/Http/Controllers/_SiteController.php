<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class _SiteController extends Controller
{
    public function index()
    {
        return view('_site.index');
    }

    public function class02()
    {
        return view('_site.class02');
    }

    public function class03()
    {
        return view('_site.class03');
    }

    public function class04()
    {
        return view('_site.class04');
    }

    public function class05()
    {
        return view('_site.class05');
    }
}
