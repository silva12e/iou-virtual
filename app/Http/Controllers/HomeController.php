<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;


class HomeController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth')->except('getHomepage');
    }

    public function getHomepage()
    {
        if($user = Auth::user())
        {
            return redirect('admin/home');
        }
        return view('pages.homepage'); 
    }

    public function index()
    {
        return view('admin.home');
    }
}
