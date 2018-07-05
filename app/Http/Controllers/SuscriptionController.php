<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuscriptionController extends Controller
{
	/** Metodo para listar las suscripciones
	*/
    public function list(Request $request){
        $system=$request->input("system");
        $suscription= new \App\model\Suscription();
        $list=$suscription::where('system',$system)->get(); 
    	return response()->json($list);
    }

    public function save(Request $request){        
        $system=$request->input("system");
        $initdate=$request->input("initdate");
        $enddate=$request->input("enddate");
        $user_email=$request->input("user_email");
        $suscription= new \App\model\Suscription();
        $suscription->system=$system;
        $suscription->initdate=$initdate;
        $suscription->enddate=$enddate;
        $suscription->user_email=$user_email;
        $suscription->save();
        $response=['id'=>$suscription->id];
        return response()->json($response);
    }
}
