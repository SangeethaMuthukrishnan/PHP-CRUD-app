@extends('employees.layout')
@section('content')
<div class="card">
	<div class="card-header">view<div>
		<div class="card-body">


			<div class="card-body">
                
				<h5 class="card-title">Name : {{ $employees->name}}</h5>

				<p class="card-text">City : {{$employees->city}}</p>
			

				<p class="card-text">phone : {{$employees->phone}}</p>
			
			</div>
			</hr>
		</div>
	</div>
