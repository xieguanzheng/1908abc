<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    	echo "hello word";
    }
    public function add(){
    	return view('user.add');
    }
    public function adddo(Request $request){
    $data = $request->all();
    dd($data);
    }
     
}
