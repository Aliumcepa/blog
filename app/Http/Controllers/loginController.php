<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;
use App\User;
use App\LoginModel;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Session;

class LoginController extends Controller
{
 public function index()
 {
        return view('doclogin');
 }




 public function doLogin (Request $request)
 {
  $user = new LoginModel;
     $user->email = Input::get("email");
  $user->password = Input::get("password");
  
  
  $myJSON = json_encode($user);
   
         $client = new Client();
            $res = $client->request('POST', '10.0.0.26:8181/rest/login/', [
                'json' => $user,
    'content-type' => 'application/json',
    'http_errors' => false
            ]);
   
   $status=$res->getStatusCode();
     
   if($status==200){
    
   var_dump($status); 
   $user_data=json_decode($res->getBody(), true);
   
   unset($user_data['password']);
   
   $request->session()->put('user_data',$user_data );

  /* if($request->session()->has('success'))
   {
    return view('assistantRegister');
   }
   else{
    return view('doclogin');
   }*/
                
      return redirect('/profile');
    
                
   }
   
   else
   {
    $message=(json_decode($res->getBody()));
                return view('doclogin',['mes' => $message ]);
   }
  } 
}
?>