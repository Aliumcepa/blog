<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


class docRegistercontroller extends Controller

    {
        public function create()
        
        {
            return view('doctoregistration');
        }
        
        
        
        public function index (Request $request)
        
        {
              
         
            $user = new Trialmodel;
            
            $user->initial =  Input::get("prefix");
            $user->first_name =  Input::get("first_name");
            $user->last_name = Input::get("last_name");
            $user->contact_mobile = Input::get("Mobile_no");
            $user->contact_work = Input::get("Phone_no");
            $user->email = Input::get("email");
            $user->iap_no = Input::get("iap_no");
            $user->mci_no = Input::get("mci_no");
            $user->password = md5(Input::get("password"));
           // $user->cpassword = md5(Input::get("cpassword"));
            
            //$myJSON = json_encode($user);
            
            //var_dump($myJSON);
            $client = new Client();
            
                $res = $client->request('POST', '10.0.0.26:8181/rest/register', [
                    // $myJSON => json_decode( $_POST['$user']),
                    'json' => $user,
                    'content-type' => 'application/json',
                    'http_errors' => false,
                    'headers' => [
                        //'Authorization' => 'Token 238956e4b91c727b7fdc72f94290c8707371ed2f'
                    ]
                    
                ]);
           
           
            
           // echo $res->getStatusCode();
            
           // $res->setBody($myJSON);
            
            $status=$res->getStatusCode();
            if ($status==400)
            {
            /* (function badRequest($message='Bad request', $statusCode=400)
              {
                return $this->arrayResponse(['error' => $message], $statusCode);
              });*/
                //return back()->withErrors()->withInput()->etc();
                //print_r(json_decode($res->getBody(),true));
                
               $arrErrorsResponse=(json_decode($res->getBody(),true));
               foreach($arrErrorsResponse['errors'] as $key=>$val)
               {
                   if($key=='contact_work')
                   {
                       
                       $arrErrorsResponse['errors']['Phone No.'] = $arrErrorsResponse['errors'][$key];
                       unset($arrErrorsResponse['errors'][$key]);
                   }
                   
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
                   if($key=='initial')
                   {
                       
                       $arrErrorsResponse['errors']['Prefix'] = $arrErrorsResponse['errors'][$key];
                       unset($arrErrorsResponse['errors'][$key]);
                   }
                   if($key=='mci_no')
                   {
                       
                       $arrErrorsResponse['errors']['MCI No.'] = $arrErrorsResponse['errors'][$key];
                       unset($arrErrorsResponse['errors'][$key]);
                   }
                   if($key=='iap_no')
                   {
                       
                       $arrErrorsResponse['errors']['IAP Membership No.'] = $arrErrorsResponse['errors'][$key];
                       unset($arrErrorsResponse['errors'][$key]);
                   }
                   if($key=='password')
                   {
                       
                       $arrErrorsResponse['errors']['Password'] = $arrErrorsResponse['errors'][$key];
                       unset($arrErrorsResponse['errors'][$key]);
                   }
               }

               return view('doctoregistration',['arrResponse' => $arrErrorsResponse]);
              
               /*try {
                   $response = $client->get('/not_found.xml')->send();
               } catch (Guzzle\Http\Exception\BadResponseException $e) {
                   echo  $e->getMessage();
               
               }*/
               
               
              
            }
            
            elseif ($status==201)
            {
               
              
                
               $success=(json_decode($res->getBody()));
              
                return view('doctoregistration',['success' => $success]);
               
               // var_dump(isset($az['message']));
                //echo "Successful Registration";
                
               
                
                
            }
            
            
        }
        
        
        
            
    }
    
    
    ?>

