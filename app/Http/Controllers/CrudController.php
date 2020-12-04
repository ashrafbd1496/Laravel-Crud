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
    	return $value->all();
    	// echo $value->name;
    	// echo $value->input('name');
    	// echo $value->get('name');

    }















}//end of the class
