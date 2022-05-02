<!DOCTYPE html>

<head>
	<title>crud</title>
</head>
<body>
	@extends('employees.layout')
	@section('content')
	<div class="container">

      <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Contacts</div>
                    <div class="card-body">

		<a href="{{url('/employees/create')}}" class="btn btn-success btn-sm" title="Add new">
			<i class="fa fa_plus" aria-hidden="true"></i>Add new
        </a>
                        <h3>{{$emp}}</h3>
		</br>
	    </br>
        <div class="table-responsive">
        	<table class="table">
        		<thead>
        			<tr>
        				    <th>S.no</th>

        					<th>Name</th>
        					<th>City</th>
        					<th>Phone</th>
        					<th>Actions</th>
        			</tr>
        		</thead>


        		 <tbody>


                      @foreach($employee as $item)
        	  <tr>


        		<td>{{ $loop->iteration }}</td>

        		<td>{{ $item->name}}</td>
        		<td>{{$item->city}}</td>
        		<td>{{$item->phone}}</td>
        		<td>
        			<a href="{{ url('/employees/' . $item->id)}}" title="View employee"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>

                    <a href="{{url('/employees/' . $item->id . '/edit')}}" title="Edit employee"><button class="btn tn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                    <form method="POST" action="{{url('/employees'. '/'.$item->id)}}" accept-charset ="UTF-8" style="display:inline">
        				{{method_field('DELETE')}}
        				{{csrf_field()}}
        		    <button type="submit" class="btn btn-danger btn-sm" title="Delete employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>

        		    </form>


        		 </td>

             </tr>

            @endforeach

        </tbody>

</table>
</div>
 </div>


 </div>
 </div>

</div>

</div>







</body>
</html>
