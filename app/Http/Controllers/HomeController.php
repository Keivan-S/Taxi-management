<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
       // return view('index',['create'=>'1']);
        return view('index');
=======
        return view('index',['create'=>'1']);
>>>>>>> 9c9aff87e227d3edeeb0b8b987333ae9fa5cdaac
    }

    public function roles()
    {
        return view('admin.roles',['create'=>'1']);
    }
}
