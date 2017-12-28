<?php
namespace App\Http\Controllers;
//use Session;
use Illuminate\Http\Request;

use Session;

use Storage;
use App\Http\Requests;
use App\User;
use App\Trialmodel;

use Illuminate\Support\Facades\Input;

use App\Http\Controllers\Controller;

use Illuminate\Mail\Message;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use GuzzleHttp\Psr7\Response;
use Illuminate\Session\Store;
//use App\Http\Controllers\Redirect


class GetdoctorprofileController extends Controller

{   /**
    *  @function name : constructor
    *
    * This function is meant to provide the api Path
    * ---------------------------------------------------------
    *
    *
    *
    *
    *     **/
    
    public function __construct()
    {
        $this->apiPath = config('app.api_path');
        //$this->load->library('session');
    }
    
    /**
     *  @function name : showDoctorProfile
     *
     * This function is meant to show the doctor profile form
     * ---------------------------------------------------------
     *
     *
     *
     *
     *     **/
    public function showDoctorProfile (Request $request)
    
    {
        $client = new \GuzzleHttp\Client();
        // Create a request with auth credentials
        $request = $client->get($this->apiPath.'/profile',[
            
           // 'auth'=>['aks@23.com','123456'],
            
            'content-type' => 'application/json',
            'http_errors' => false,
            'headers' => [
               'Authorization' => 'Token 0035be2e0fd011c9a7662e00c4012061bd45197f'
            ]
            
        ]);
        // Get the actual response without headers
       // $response = $request->getBody();
        echo $request->getStatusCode();
        $status = $request->getStatusCode();
        
        
      if ($status==200)
        {
            
            //print_r(json_decode($res->getBody(),true));
           // $myVar = $this->session->flashdata('updateMessage');
            $response=json_decode($request->getBody(),true);
            return view('Getdoctorprofile',['response'=> $response]);
                                            // '$myVar' => $myVar]);              
        }
        
        
        elseif ($status==404)
        {
            
           
            
            $errResponse=json_decode($res->getBody());
            echo $errResponse;
             return view('Getdoctorprofile',$errResponse);
          
          }
             
         elseif ($status==406)
             {
                 
                 $authError = nl2br(" \nAUTHORIZATION FAILS! You are not authorized to view the content.");
                 return view('Getdoctorprofile',compact('authError'));
                
                 
             }
        
  }
  
  
           
      
      
/** 
 *  @function name : editDoctorProfile 
 *  
 * This function is meant to prefill the edit profile form
 * ---------------------------------------------------------
 *     
 *     
 *     
 *     
 *     **/      
    public function editDoctorProfile(Request $request)
      
      {
          $client = new \GuzzleHttp\Client();
          // Create a request with auth credentials
          $request = $client->get($this->apiPath.'/profile',[
              
              // 'auth'=>['aks@23.com','123456'],
              
              'content-type' => 'application/json',
              'http_errors' => false,
              'headers' => [
                  'Authorization' => 'Token 0035be2e0fd011c9a7662e00c4012061bd45197f'
              ]
              
          ]);
          // Get the actual response without headers
          // $response = $request->getBody();
          $status = $request->getStatusCode();
          if ($status==200)
          {
              $response=json_decode($request->getBody(),true);
              return view('editdoctorprofile')->with('response', $response);
              
              
          }
          
          
          //No rest status check in this function
      }
      
      /**
       * @function name : updateDoctorProfile
       * This function updates the Doctor PROFILE after editing
       * ---------------------------------------------------------
       *
       
       
       **/
      
     public function updateDoctorProfile(Request $request)
      
      {
          //$user = new Trialmodel;
          $user = new \stdClass();
          $user->id             = Input::get('id');
          $user->first_name     = Input::get('first_name');
          $user->last_name     = Input::get('last_name');
          $user->address_line1  = Input::get('address_line1');
          $user->email       = Input::get('email');
          $user->city           = Input::get('city');
          //$user->certifications = array(Input::get('certifications'));
         // $user->specilization = Input::get('specialization');
          $user->address_line2  = Input::get('address_line2');
          $user->contact_mobile = Input::get('contact_mobile');
          $user->iap_no         = Input::get('iap_no');
          $user->mci_no         = Input::get('mci_no');
          $user->contact_phone  = Input::get('contact_phone');
          //echo "<pre>"; print_r($user); exit;
          $client = new \GuzzleHttp\Client();
          // Create a request with auth credentials
          $request = $client->put($this->apiPath.'/profile',[
              
              // 'auth'=>['aks@23.com','123456'],
              
              'json'=> $user,
              'content-type' => 'application/json',
              'http_errors' => false,
              'headers' => [
                  'Authorization' => 'Token 0035be2e0fd011c9a7662e00c4012061bd45197f'
              ]
              
              
              
          ]);
          
         // echo "<pre>"; print_r($user); exit;
          //return Redirect::route('locations.show', Input::get('id'));
          
          // Get the actual response without headers
          // $response = $request->getBody();
          echo $request->getStatusCode();
          //echo "<pre>"; print_r($user); exit;
          $status = $request->getStatusCode();
          if ($status==400)
          {
             
                  
              //return back()->withErrors()->withInput()->etc();
              //print_r(json_decode($res->getBody(),true));
              
              $errorRes=json_decode($request->getBody(),true);
           //   return view('editdoctorprofile')->with('errorRes', $errorRes);
             // return back()->with('errorRes', $errorRes);
              //return redirect()->back()->with('errorRes', $errorRes);
             // return Redirect::back()->with($errorRes);
              return view ('editdoctorprofile')->with('errorRes', $errorRes);
              
          }
          
          if ($status==200)
          {
              
              //return back()->withErrors()->withInput()->etc();
              //print_r(json_decode($res->getBody(),true));
              
              $updateMessage = json_decode($request->getBody(),true);
              print_r($updateMessage);
             // Session::flash('updateMessage', '$updateMessage');
             Session::flash('updateMessage','$updateMessage');
              //$this->session->set_flashdata('$updateMessage', $updateMessage);
             // return $this->showDoctorProfile($user->id)->with('updateMessage', $updateMessage);
              //return view('Getdoctorprofile')->with('updateMessage', $updateMessage);
              // return Redirect::route('Getdoctorprofile', Input::get('id'));
               return redirect()->action(
                   'GetdoctorprofileController@showDoctorProfile', Input::get('id')
                   //,compact('updateMessage')
                   //->action (view('Getdoctorprofile',compact('updateMessage')))
                   
                   );
              
              
          }
          
          
      }
      
      /**
       *  @function name : showupdatedDoctorProfile
       *
       * This function is meant to show updated profile
       * ---------------------------------------------------------
       *
       *
       *
       *
       *     **/
      
   /**  public function showupdatedDoctorProfile (Request $request)
      
      {
          $client = new \GuzzleHttp\Client();
          // Create a request with auth credentials
          $request = $client->get($this->apiPath.'/profile',[
              
              
              'content-type' => 'application/json',
              'http_errors' => false,
              'headers' => [
                  'Authorization' => 'Token 0035be2e0fd011c9a7662e00c4012061bd45197f'
              ]
              
          ]);
          // Get the actual response without headers
          // $response = $request->getBody();
          echo $request->getStatusCode();
          $status = $request->getStatusCode();
          
          
          if ($status==200)
          {
              
              //print_r(json_decode($res->getBody(),true));
              
              $response=json_decode($request->getBody(),true);
              return view('Getdoctorprofile')->with('response', $response);
              
              
          }
          
      
      }
      **/
      
      
            
}


?>

