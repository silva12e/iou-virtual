@extends('layouts.app')
@section('content')
<div class="container">
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<div class="row" style="padding-top:40px;">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="/admin/payees/store" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="form-label" for="username" style="padding-bottom:10px;" >
						Enter username
					</label>
					<select name="username" id="username" class="form-control">
						<option></option>
			            @foreach($users as $key => $user)
			            <option value="{{ $user->username }}">{{ $user->username }}</option>
			            @endforeach
			        </select>
				</div>

				<div class="form-group" style="padding-top:40px;">
					<button class="btn btn-primary">Add new payee</button>
				</div>
			</form>
		</div>
	</div>
</div>

@stop
@section('js')
     <script type="text/javascript">
    $(document).ready(function() {
        $('#username').select2({
		  placeholder: 'Select an option'
		});
    });
    </script>
@stop