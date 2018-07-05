<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
   

   public function process(Request $request){
        $action=$request->input("action");
        $a=$request->input("a");
        $b=$request->input("b");
        $response=0;
        switch($action){
            case 'add': $response=$a+$b; break;
            case 'rest': $response=$a-$b; break;
            case 'didive': $response=$a/$b; break;
            case 'multiply': $response=$a*$b;  break;
        }

        return view("calc",['result'=>$response]);

        echo "$response";

   }

    
}
