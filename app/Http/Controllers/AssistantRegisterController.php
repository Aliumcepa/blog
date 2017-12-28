<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;
use App\Http\Requests;
use App\User;
use App\Assistantmodel;

use Illuminate\Support\Facades\Input;

use App\Http\Controllers\Controller;

use Illuminate\Mail\Message;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use GuzzleHttp\Psr7\Response;

class AssistantRegisterController extends Controller

    {
        public function create()
        
        {
            return view('assistantRegister');
        }
        
        
        
        public function index (Request $request)
        
        {
              
         
            $user = new Assistantmodel;
            
            $user->initial =  Input::get("prefix");
            $user->first_name =  Input::get("first_name");
            $user->last_name = Input::get("last_name");
            $user->contact_mobile = Input::get("Mobile_no");
            $user->designation = Input::get("designation");
            $user->email = Input::get("email");
            $user->iap_no = Input::get("iap_no");
            $user->mci_no = Input::get("mci_no");
            $user->clinic_id = Input::get("clinic_id");
            $user->password = md5(Input::get("Mobile_no"));
            
            $myJSON = json_encode($user);
            
            //var_dump($myJSON);
            $client = new Client();
            
                $res = $client->request('POST', '10.0.0.26:8181/rest/assistantRegister/', [
                    // $myJSON => json_decode( $_POST['$user']),
                    'json' => $user,
                    'content-type' => 'application/json',
                    'http_errors' => false,
                    'headers' => [
                        'Authorization' => 'Token 0035be2e0fd011c9a7662e00c4012061bd45197f'
                    ]
                    
                ]);
           
           
            
           // echo $res->getStatusCode();
            
           // $res->setBody($myJSON);
            
            $status=$res->getStatusCode();
            if ($status==400)
            {
            
                
               $arrErrorsResponse=(json_decode($res->getBody(),true));
               foreach($arrErrorsResponse['errors'] as $key=>$val)
               {
                  
                   
                   if($key=='contact_mobile')
                   {
                       
                       $arrErrorsResponse['errors']['Mobile No.'] = $arrErrorsResponse['errors'][$key];
                       unset($arrErrorsResponse['errors'][$key]);
                   }
                   if($key=='first_name')
                   {
                       
                       $arrErrorsResponse['errors']['First Name'] = $arrErrorsResponse['errors'][$key];
                       unset($arrErrorsResponse['errors'][$key]);
                   }
                   if($key=='last_name')
                   {
                       
                       $arrErrorsResponse['errors']['Last Name'] = $arrErrorsResponse['errors'][$key];
                       unset($arrErrorsResponse['errors'][$key]);
                   }
                   if($key=='email')
                   {
                       
                       $arrErrorsResponse['errors']['Username'] = $arrErrorsResponse['errors'][$key];
                       unset($arrErrorsResponse['errors'][$key]);
                   }
                   
                   
                   if($key=='iap_no')
                   {
                       
                       $arrErrorsResponse['errors']['IAP Membership no'] = $arrErrorsResponse['errors'][$key];
                       unset($arrErrorsResponse['errors'][$key]);
                   }
                   if($key=='mci_no')
                   {
                       
                       $arrErrorsResponse['errors']['MCI no'] = $arrErrorsResponse['errors'][$key];
                       unset($arrErrorsResponse['errors'][$key]);
                   }
                   
                   if($key=='designation')
                   {
                       
                       $arrErrorsResponse['errors']['Designation'] = $arrErrorsResponse['errors'][$key];
                       unset($arrErrorsResponse['errors'][$key]);
                   }
                   
                   if($key=='clinic_id')
                   {
                       
                       $arrErrorsResponse['errors']['Clinic ID'] = $arrErrorsResponse['errors'][$key];
                       unset($arrErrorsResponse['errors'][$key]);
                   }
                   
                   if($key=='initial')
                   {
                       
                       $arrErrorsResponse['errors']['Prefix'] = $arrErrorsResponse['errors'][$key];
                       unset($arrErrorsResponse['errors'][$key]);
                   }
                   
                   
               }

               return view('assistantRegister',['arrResponse' => $arrErrorsResponse]);

            }
            
            elseif ($status==201)
            {
               
              
                
               $success=(json_decode($res->getBody()));
               
              
                return view('assistantRegister',['suc' => $success]);
                }
                
                /*if(!($request->session()->has('$users')))
                {
                   return view ('Assistant profile')
                    
                }
                
                else{
                    return view('Assistantprofile');
                    
                
                }
      */
        
        
        }    
    }
    
    
    ?>


