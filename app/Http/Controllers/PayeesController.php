<?php

namespace App\Http\Controllers;

use App\Payee;
use Illuminate\Http\Request;

class PayeesController extends Controller
{
   
    public function index()
    {
        return view('pages.payees.index');
    }

    
    public function create()
    {
        return view('pages.payees.create');
    }

    public function store(Request $request)
    {
        
    }

    
    public function show(Payee $payee)
    {

    }

   
    public function edit(Payee $payee)
    {
        
    }

    
    public function update(Request $request, Payee $payee)
    {
        
    }

    
    public function destroy(Payee $payee)
    {
        
    }
}
