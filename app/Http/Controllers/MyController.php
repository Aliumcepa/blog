<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(Request $request)
    {
        
        if($request->session()->has('user_data'))
        {
            $arrUser = $request->session()->get('user_data');
            //echo "<pre>"; print_r($arrUser); exit;
            return view('loginwelcome',['data'=>$arrUser]);
        }
        else{
            return view('doclogin');
        }
        
    }
}


?>