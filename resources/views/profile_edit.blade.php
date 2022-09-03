<style>
	.input {
		outline: none;
		height: 25px;
		border-color: #88cb88;
	}

	select {
		outline: none;
		height: 31px;
		width: 200px;
		border-color: #88cb88;
	}

	.btn {
		height: 31px;
		background-color: green;
		border: none;
		padding: 2px 10px;
		cursor: pointer;
		border-radius: 5px;
	}
</style>
@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<div class="col-md-4 offset-md-4">
	<div class="row">
		@if(Session::has('Message'))
		{{Session::get('Message')}}
		@endif
		{{Form::open(['url' =>'/profile/update','class'=>'form-horizontal','enctype' => 'multipart/form-data'] )}}
		<div class="main form-group">
			<h3>Edit Proflile Page</h3>
			@if(!is_null($user->photo))
			<img src="/uploads/user/ {{$user->photo}}" alt="User Image" class="img img-responsive rounded-circle rounded-1 border-primary">
			@else
			<img src="/uploads/user/user-profile-default-image.png" alt="User Image" class="img img-responsive rounded-circle rounded-1 border-info w-auto h-25">
			@endif
			<div class="input-group ">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">Name</span>
				</div>
				<input type="text" class="form-control" name="Name" value="{{$user->name}}">
			</div>
			<div class="input-group ">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">Email</span>
				</div>
				<input type="email" class="form-control" name="email" value="{{$user->email}}">
			</div>

			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1"> Photo </span>
				</div>
				<input type="file" class="form-control" name="photo">
			</div>

			<div>
				<input class="btn btn-primary btn-sm" type="submit" name="submit" value="Update Profile">
			</div>
		</div>
		{{Form::close()}}
	</div>
</div>
<!-- <a href="view/income_table.php">Income Table</a> -->

@endsection