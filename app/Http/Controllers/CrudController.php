<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\Crud;

class CrudController extends Controller
{

	// Show form method
    public function showForm()
    {
    	return view('crud.index');
    }

    // Show form method
    public function createCrudData(Request $value)
    {

    	//validaton
    	$this->validate($value,[

    		'name'	=>'required',
    		'email'	=>'required | unique:cruds',
    		'uname'	=>'required | min:4 | max: 10',
    		'cell'	=>'required',

    	],[

    		'name.required'	=>'You should fill the name field',
    		'email.unique'	=>'Email has taken',

    	]);

    	/**
    	 *Image Upload system
    	 */

    	if ($value ->hasFile('photo')){

            $image = $value->file('photo');
            $photo_name = md5(time().rand()) .'.'. $image->getClientOriginalExtension();
            $image ->move(public_path('media/students/'), $photo_name);

        }else{
    	    $photo_name = '';
        }


    	//Create New Student
    	Crud::create([

    		'name'	=> $value -> name,
    		'email'	=> $value -> email,
    		'cell'	=> $value -> cell,
    		'uname'	=> $value -> uname,
    		'photo'	=> $photo_name,

    	]);

    	//Redirection
    	return redirect('crud-all')->with('success', 'Student Added Successful');

    }//end of the funciton createCrudData


    // Show all student data
    public function showData()
    {
        //        $all_students = Crud::latest() ->get();   //It will show latest data as descending order

        $all_students = Crud::all();    // it will show all data as ascending order
        return view('crud.all',[
            'students'  =>$all_students,
        ]);
    }
    /*
     * Show single data
     */
    function showSingleData($id){
       $student = Crud::find($id);
        return view('Crud.show',[
            'single_student'   =>$student,
        ]);
    }





}//end of the class
