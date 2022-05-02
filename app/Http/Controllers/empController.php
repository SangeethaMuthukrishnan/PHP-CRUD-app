<?php

namespace App\Http\Controllers;
use App\Models\emp;
use Illuminate\Http\Request;

class empController extends Controller
{



    public function index()
    {
    	$employee = emp::all();
    	return view ('employees.index')->with('employee',$employee);
    }



    public function create()
    	{
    		return view('employees.create');
    	}




    public function store(Request $request)
    	{
    		$input = $request->all();
    		emp::create($input);
    		return redirect('employees')->with('flash_meassage','employee added!');
    	}



    public function show($id)
    {
    	$employee = emp::find($id);
    	return view('employees.show')->with('employees',$employee);
     }



     public function edit($id)
    {
        $employee = emp::find($id);
        return view('employees.edit')->with('employees', $employee);
    }

     public function update(Request $request, $id)
    {

     $employee =emp::find($id);
      $input = $request->all();
     $employee->update($input);
     return redirect('employees')->with('flash_measage','Employee updated');
}
   function destroy($id)

  {
  	emp::destroy($id);
  	return redirect('employees')->with('flash_message', 'employee deleted!');
  }

}
