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


class ForgetPasswordController extends Controller

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
     *  @function name : show form
     *
     * This function is meant to show the doctor profile form
     * ---------------------------------------------------------
     *
     *
     *
     *
     *     **/
    
    public function showForgotPasswordForm()
    {
      return view(forgotpassword);
    }
    
    
    
    /**
     *  @function name : enter updated password with email
     *
     * This function is meant to show the doctor profile form
     * ---------------------------------------------------------
     *@Patch method @param string $response
     * @param integer $code optional HTTP response code 200 ,400.
     * @param string optional "ID" for JSON style returns
     *
     * @return response object  $response for 200
     *                          $errResponse for 400

     *
     *
     *
     *     **/
    
    public function updatePassword(Request $request)
    
    {
        $client = new \GuzzleHttp\Client();
        // Create a request with auth credentials
        $request = $client->patch($this->apiPath.'/forgotpassword',[

            
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
            return view('forgotpassword',['response'=> $response]);
            // '$myVar' => $myVar]);
        }
        
        
        elseif ($status==400)
        {
            
            
            
            $errResponse=json_decode($res->getBody());
           // echo $errResponse;
            return view('forgotpassword',$errResponse);
            
        }
        
        
        
    }
    
    
    
    
}


?>