@extends('employees.layout')
@section('content')
<div class="card">
	<div class="card-header">create new employee</div>
	<div class="card-body">

		<form action="{{ url('employees')}}" method="post">
	 {!! csrf_field() !!}
	 <label>Name</label></br>
	 <input type="text" name="name" id="name" class="form-control"></br>
	 <label>city</label></br>
	 <input type="text" name="city" id="city" class="form-control"></br>
	 <label>phone</label></br>
	 <input type="number" name="phone" id="phone" class="form-control"></br>
	 <input type="submit" value="Save"
	 class="btn btn-success"></br>
	 </form>
	 </div></div>


	 	input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
	 </style>
	 @stop
