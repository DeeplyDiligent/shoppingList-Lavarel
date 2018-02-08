<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function getHome(){
        return view('welcome');
    }
    public function getAbout(){
        return view('about');
    }

}
