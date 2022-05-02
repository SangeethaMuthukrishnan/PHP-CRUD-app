@extends('employees.layout')
@section('content')
<div class="card">
	<div class="card-header"></div>
	<div class="card-body">

		<form action="{{url('employees/'. $employees->id)}}" method="POST">

		@csrf

		@method("PATCH")
		<input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
		<label>Name</label></br>
		<input type="text" name="name" id="name" value="{{$employees->name}}" class="form-control"></br>
		<label>City</label></br>
		<input type="text" name="city" id="city" value="{{$employees->city}}" class="form-control"></br>
		<label>phone</label></br>
		<input type="text" name="phone" id="phone" value="{{$employees->phone}}" class="form-control"></br>
		<input type="submit" value="Update" class="btn btn-success"></br>

			


		</form>		
