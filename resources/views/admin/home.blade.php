@extends('layouts.app')
@section('content')

<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
    <div class="row">
        <div class="panel" style="margin-top:40px;padding-top:20px;">
            <div class="panel-heading">
                <h1 class="main-h"> <i class="fa fa-tachometer main-i" aria-hidden="true"></i> Control Center</h1>
            </div>
            <div class="panel-body" >
                <div class="row" style="padding:20px;">
                    <div class="col-md-4 col-sm-4">
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="btn btn-mred btn-lg" role="button" style="width:100px;">
                            <span class="fa fa-dollar"></span> <br/>New <br />transfer
                        </a>
                        <a href="#" class="btn btn-mred btn-lg" role="button" style="width:100px;">
                            <span class="fa fa-address-card" aria-hidden="true"></span> <br/>View/Edit<br />Payees
                        </a>
                        <a href="#" class="btn btn-mred btn-lg" role="button" style="width:100px;">
                            <span class="fa fa-plus-circle" aria-hidden="true"></span> <br/>Add<br />Payee
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="panel" style="margin-top:40px;padding-top:20px;">
	    	<div class="panel-heading">
	    		<h1 class="main-h"> <i  class="fa fa-info-circle main-i" aria-hidden="true"></i> Account Summary</h1>
	    	</div>
	    	<div class="panel-body" >
	    		<div class="row" style="padding:20px;">
	    			<div class="col-md-4 col-sm-4">
	    			</div>
	                <div class="col-md-6">
		               
	                </div>
	            </div>
	    	</div>
	    </div>
    </div>
    <div class="row">
    	<div class="panel" style="margin-top:40px;padding-top:20px;">
	    	<div class="panel-heading">
	    		<h1 class="main-h"><i class="fa fa-calendar main-i"></i> Transaction Log</h1>
	    	</div>
	    	<div class="panel-body">
				<div class="table-container">
                    <table class="table-users table" border="0">
                        <tbody>
                            <tr>
                                <td width="10" align="center">
                                    <i class="fa fa-2x fa-user fw"></i>
                                </td>
                                <td>
                                     John Smith<br><i class="fa fa-envelope"></i>
                                </td>
                                <td>
                                    Builder Admin
                                </td>
                                <td align="center">
                                    Last Login:  6/14/2017<br><small class="text-muted">2 days ago</small>
                                </td>
                            </tr>
                            <tr>
                                <td width="10" align="center">
                                    <i class="fa fa-2x fa-user fw"></i>
                                </td>
                                <td>
                                     John Smith<br><i class="fa fa-envelope"></i>
                                </td>
                                <td>
                                    Builder Admin
                                </td>
                                <td align="center">
                                    Last Login:  6/14/2017<br><small class="text-muted">2 days ago</small>
                                </td>
                            </tr>
                            <tr>
                                <td width="10" align="center">
                                    <i class="fa fa-2x fa-user fw"></i>
                                </td>
                                <td>
                                     John Smith<br><i class="fa fa-envelope"></i>
                                </td>
                                <td>
                                    Builder Admin
                                </td>
                                <td align="center">
                                    Last Login:  6/14/2017<br><small class="text-muted">2 days ago</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
	    </div>
    </div>
</div>
@endsection

