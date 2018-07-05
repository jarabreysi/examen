<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function list(){
    	$person=new \App\model\Person();
    	$list = $person->all();
    	
    	return view("personlist",['list'=>$list ]);
    }

    public function form(){
    	return view("form");
    }

    public function save(Request $request){
    	$name=$request->input("name");
    	$phone=$request->input("phone");
    	$person=new \App\model\Person();
    	$person->name=$name;
    	$person->phone=$phone;
    	$person->save();
    	return redirect("person/list");

    }
}
