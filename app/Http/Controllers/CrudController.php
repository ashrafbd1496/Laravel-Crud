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
    public function showData()
    {
    	return view('crud.all');
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



    	Crud::create([

    		'name'	=>$value->name,
    		'email'	=>$value->email,
    		'cell'	=>$value->cell,
    		'uname'	=>$value->uname
    		
    	]);

    	//Redirection
    	return redirect()->back();


    }//end of the funciton







}//end of the class
