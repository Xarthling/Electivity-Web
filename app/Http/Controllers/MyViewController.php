<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyViewController extends Controller
{
    public function view1()
    {
        $date = date('Y-m-d');
        $time = date('H:i:s');
        return view('pages.view1', compact('date', 'time'));
    
    }

    public function view2()
    {
        return view('pages.view2');
    }

    public function view3()
    {
        return view('pages.view3');
    }

    public function view4()
    {
        return view('pages.view4');
    }

    public function view5()
    {
        return view('pages.view5');
    }
    public function view6()
    {
        return view('pages.view6');
    }
}
