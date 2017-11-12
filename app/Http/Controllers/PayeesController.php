<?php

namespace App\Http\Controllers;

use App\Payee;
use App\User;
use Auth;
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
        $payees = Payee::getUserInformation();
        $user = Auth::user();
        return response()->json(['payees'=>$payees, 'authUser'=>$user]);
    }

    public function store(Request $request)
    {
        $payee = new Payee;
        $payee->username = $request->username;
        $payee->payer_id = Auth::user()->id;
        $payee->save();

        return redirect('admin/home');
    }
}
