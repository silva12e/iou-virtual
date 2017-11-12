<?php

namespace App\Http\Controllers;
use App\transaction;
use App\User;
use Auth;
use Illuminate\Http\Request;

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
        $transaction = new Transaction;
        $transaction->from_user_id = Auth::user()->id;
        $transaction->to_user_id = $request->to_user_id;
        $transaction->amount = $request->amount;
        $transaction->message = $request->message;
        $transaction->status = 'In progress';
        $transaction->save();
    }

    public function show(transaction $transaction)
    {
        return view('pages.transactions.show', compact('transaction', $transaction));
    }
}
