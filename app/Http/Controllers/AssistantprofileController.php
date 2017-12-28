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
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Config;



class AssistantprofileController extends Controller

{
        public function __construct()
        {
            $this->apiPath = config('app.api_path');
        }
        
        public function index (Request $request)
        {
            
           // API call for getting assistant data

            
            //var_dump($myJSON);
            $client = new Client();
            
            $res = $client->request('GET', $this->apiPath.'/assistantProfile/1', [
                    
                    
                    'content-type' => 'application/json',
                    'http_errors' => false,
                    'headers' => [
                        'Authorization' => 'Token c86bbfbdef181c3b3c38b6272bdc3484fe4ffbbd'
                    ]
                    
                ]);
           
       
            
            $status=$res->getStatusCode();
            if ($status==200)
            {
            
                
                $success=json_decode($res->getBody(),true);
                return view('Assistantprofile',['data' => $success]);
              
              
             }
              
   
            
            if ($status==404)
             {
               $suc=(json_decode($res->getBody()));
                return view('Assistantprofile',['suc' => $suc]);
                
                
             }
        }    
               
             public function AssistantprofileController()
             {
                 session_start();
                 
                 if( isset( $_SESSION['$success'] ) ) {
                     $_SESSION['$success'] += 1;
                 }else {
                     $_SESSION['$success'] = 1;
                 }
                 
             }   
        
        
        }    
    
      /**  public function update($id)
        {
            
            $client = new GuzzleHttp\Client();
            $res = $client->put('http://api.dev/api/v1/locations', [
                'auth' =>  ['David', '888177'],
                'body' => ['id' => Input::get('id'),
                    'name' => Input::get('name'),
                    'address' => Input::get('address'),
                    'postal_code' => Input::get('postal_code'),
                    'city' => Input::get('city'),
                    'indication' => Input::get('indication'),
                    'comment' => Input::get('comment')]
            ]);
            
            return Redirect::route('locations.show', Input::get('id'));
        }**/
    
    ?>



