@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
    <div class="row">
        <div class="panel" style="margin-top:40px;padding-top:20px;">
            <div class="panel-heading">
                <h1 class="main-h"> <i  class="fa fa-info-circle main-i" aria-hidden="true"></i> Account Summary</h1>
            </div>
            <div class="panel-body" >
            <div class="row" style="padding:20px;">
                <div class="col-md-6">
                    <h3>{{ auth()->user()->name }} ({{ auth()->user()->username }})</h3>
                </div>
                
            </div>
            <div class="row" style="padding:20px;">
                <div class="col-md-12">
                    <h3>TOTAL BALANCE (VC) - <span style="font-size:28px;padding-left:20px;">{{ auth()->user()->balance }}</span></h3>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="panel" style="">
            <div class="panel-heading">
                <h1 class="main-h"> <i class="fa fa-tachometer main-i" aria-hidden="true"></i> Control Center</h1>
            </div>
            <div class="panel-body" >
                <div class="row" style="padding:20px;">
                    <div class="col-md-4 col-sm-4">
                    </div>
                    <div class="col-md-6">
                        <a href="/admin/transactions/" class="btn btn-mred btn-lg" role="button" style="width:100px;">
                            <span class="fa fa-calendar"></span> <br/>All <br />transfers
                        </a>
                        <a href="/admin/transactions/create" class="btn btn-mred btn-lg" role="button" style="width:100px;">
                            <span class="fa fa-dollar"></span> <br/>New <br />transfer
                        </a>
                        <a href="/admin/payees/" class="btn btn-mred btn-lg" role="button" style="width:100px;">
                            <span class="fa fa-address-card" aria-hidden="true"></span> <br/>View/Edit<br />Payees
                        </a>
                        <a href="/admin/payees/create" class="btn btn-mred btn-lg" role="button" style="width:100px;">
                            <span class="fa fa-plus-circle" aria-hidden="true"></span> <br/>Add<br />Payee
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

