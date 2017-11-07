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

    public function editProfile()
    {
        $user = Auth::user();

        return view('admin.edit',compact('user', $user));
    }

    public function updateProfile(Request $request)
    {

        $user = Auth::user();
        $user->username = Request::input('username');
        $user->email = Request::input('email');
        $user->avatar = Request::input('avatar');
        $user->save();

        Flash::message('Your account has been updated!');
        return Redirect::to('/');
    }
}
