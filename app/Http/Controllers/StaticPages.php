<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPages extends Controller
{
public function home(){
return view('layouts/home');
}

public function help(){
return view('layouts/help');
}

public function about(){
return view('layouts/about');
}

public function contact(){
return view('layouts/contact');
}
}
