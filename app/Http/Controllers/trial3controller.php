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


class trial3controller extends Controller

    {
        public function create()
        
        {
            return view('registration');
        }
        
        
        
        public function index (Request $request)
        
        {
              
         
            $user = new Trialmodel;
            
            $user->prefix =  Input::get("prefix");
            $user->first_name =  Input::get("first_name");
            $user->last_name = Input::get("last_name");
            $user->contact_mobile = Input::get("Mobile_no");
            $user->Phone_no = Input::get("Phone_no");
            $user->email = Input::get("email");
            $user->iap_no = Input::get("iap_no");
            $user->imi_no = Input::get("mci_no");
            $user->password = md5(Input::get("password"));
            
            $myJSON = json_encode($user);
            
            //var_dump($myJSON);
            $client = new Client();
            
                $res = $client->request('POST', '10.0.0.26:8181/rest/doctorRegister', [
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
                
               $v=(json_decode($res->getBody(),true));
               return view('registration',['av' => $v ]);
              
               /*try {
                   $response = $client->get('/not_found.xml')->send();
               } catch (Guzzle\Http\Exception\BadResponseException $e) {
                   echo  $e->getMessage();
               
               }*/
               
               
              
            }
            
            elseif ($status==201)
            {
               
               // echo $res->getBody();
                
            // print_r(json_decode($res->getBody(),true));
                
               $z=(json_decode($res->getBody()));
               // return view('registration',$z);
                return view('registration',['az' => $z]);
               
               // var_dump(isset($az['message']));
                //echo "Successful Registration";
                
               
                
                
            }
            //echo $res->getStatusCode();
            // "201"
            //echo $res->getHeader('content-type');
            // 'application/json; charset=utf8'
            //echo $res->getBody();
            // {"type":"User"...'
            
           // return view('registration');
            //$v = Store::all();
           //return View::make('formbootstrap', compact('v'));
          // return view('formbootstrap',compact('v'));
           // return view('formbootstrap');
          
           //return view('formbootstrap',['' => $result ]);
           //return view('formbootstrap', array('av'=>$v));
          //return view ('formbootstrap')->with('av', $v);
            //return view('pages.welcomes',['data' => $s ]);
            // return view('formbootstrap')->with('av', $v);
             //return view('formbootstrap',array('av' => '$v'));
          
          
            //$user->save();
           # return view('newfile1');
           // return redirect('success');
            
        }
        
        
        
            
    }
    
    
    ?>

