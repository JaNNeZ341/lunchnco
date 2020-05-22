<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function display1(){
        return view('1_depan');
    }
    public function display2(){
        return view('2_login');
    }
    public function display3(){
        return view('3_home');
    }
    public function display4(){
        return view('4_setting_profile');
    }
    public function display5(){
        return view('5_change_password');
    }
    public function display6(){
        return view('6_view_order');
    }
    public function display7(){
        return view('7_history');
    }
    public function display8(){
        return view('8_menu_detail');
    }
    public function display9(){
        return view('9_ganti_order');
    }
    public function display10(){
        return view('10_about_us');
    }
    public function display11(){
        return view('11_faq');
    }
    public function display12(){
        return view('12_home2');
    }
}
