@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="panel">
			<div class="panel-heading">
				<h1 class="text-center">
					<i class="fa fa-pencil"></i> Edit Profile
				</h1>
			</div>
			<div class="panel-body">
				<form method="POST" action="update" >
					<div class="form form-group" style="padding:40px;">
						<div class="row">
							<label class="form-label">Name</label>
							<input value="{{ $user->name }}" class="form-control" type="text" class="form-control" name="name" id="name">
						</div>
						<br>
						<div class="row">
							<label class="form-label">E-mail</label>
							<input value="{{ $user->email }}" placeholder="email" class="form-control" type="email" class="form-control" name="email" id="email">
						</div>
						<br>
						<div class="row">
							<button class="btn btn-lg btn-primary">Update Profile</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop