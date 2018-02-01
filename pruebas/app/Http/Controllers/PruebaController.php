<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    
    public function index()
    {
    	


    }

    public function getFile(Request $request)
    {
    	
    	$file = \Excel::load($request->excel, function($reader) {

		})->toArray(array('cedula',));
    	dd($file);
	}

	public function form_cedulas()
	{
		return view('formulario');
	}

	}