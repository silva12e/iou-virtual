<?php

namespace App\Http\Controllers;

use App\Payee;
use App\User;
use Auth;
use Validator;
use Illuminate\Http\Request;

class PayeesController extends Controller
{
   
    public function index()
    {
        return view('pages.payees.index');
    }
    
    public function create()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        return view('pages.payees.create', compact('users', $users));
    }

    public function getAllPayees()
    {
        $payees = Payee::with('user')->where('payer_id', Auth::user()->id)->get();
        $user = Auth::user();
        return response()->json(['payees'=>$payees, 'authUser'=>$user]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'username' => 'required',
        ]);

        if ($validator->fails()) 
            return redirect()->back()->withErrors($validator);

        $payee = new Payee; 
        $payee->username = $request->username;
        $payee->payer_id = Auth::user()->id;
        $payee_id = User::where('username', $payee->username)->get()->pluck('id');
        $payee->payee_id= preg_replace(array('/^\[/','/\]$/'), '',$payee_id);   

        $payee->save();

        return redirect('admin/home');
    }
}
