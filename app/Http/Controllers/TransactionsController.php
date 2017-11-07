<?php

namespace App\Http\Controllers;

use App\transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    
    public function index()
    {
        return view('pages.transactions.index');
    }

    public function create()
    {
        return view('pages.transactions.create');
    }

    public function store(Request $request)
    {

    }

    public function show(transaction $transaction)
    {

        return view('pages.transactions.show', compact('transaction', $transaction));
    }


    public function edit(transaction $transaction)
    {

    }

    public function update(Request $request, transaction $transaction)
    {

    }

    public function destroy(transaction $transaction)
    {

    }
}
