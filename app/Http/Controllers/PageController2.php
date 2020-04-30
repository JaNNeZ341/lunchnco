<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController2 extends Controller
{
    public function display($halaman){
        return view($halaman);
    }
}
