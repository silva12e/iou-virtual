@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row" style="padding-top:40px;">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form>
				<div class="form-group">
					<label class="form-label" for="username" style="padding-bottom:10px;" >
						Enter username
					</label>
					<select name="username" id="username" class="form-control">
			            @foreach($users as $key => $user)
			            <option value="{{ $key }}">{{ $user->username }}</option>
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
        $('#username').select2();
    });
    </script>
@stop