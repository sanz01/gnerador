<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FileController extends Controller{
    
    public function index(){
    	return view('home');
    }

    public function viewDatabase(){
    	return view('layouts.databaseList');
    }

}
