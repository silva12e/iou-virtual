<?php

namespace App\Http\Controllers;
use App\transaction;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Validator;

class TransactionsController extends Controller
{
    public function index()
    {
        return view('pages.transactions.index');
    }

    public function UserTransactions()
    {
        $id = Auth::user()->id;
        $transactions  = Transaction::where('from_user_id', $id)->with('user')->get();

        return response()->json(['transactions'=>$transactions]);
    }

    public function create()
    {
        return view('pages.transactions.create');
    }


    public function store(Request $request)
    {
         $validator = Validator::make($request->all(),[
            'from_user_id' => 'required',
            'to_user_id' => 'required',
            'amount' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json(['errors'=>$validator->errors()]);
            
        }

        $transaction = new Transaction;
        $transaction->from_user_id = Auth::user()->id;
        $transaction->to_user_id = $request->to_user_id;
        $transaction->amount = $request->amount;
        $transaction->message = $request->message;
        $transaction->status = 'In progress';
        
        //Change this. This will happen when the user accepts the transaction
        $userPayer = Auth::user();
        $userPayer->balance = $user->balance - $request->amount;

        $transaction->save();
        $user->save();

    }

    public function show(transaction $transaction)
    {
        return view('pages.transactions.show', compact('transaction', $transaction));
    }
}
