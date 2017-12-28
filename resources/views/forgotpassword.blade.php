 @extends('layout.register') 
 @section ('content')
 
 @isset($response)
 <div class="alert alert-success">
        
            {{$response['message']}}
        	</div>
 <div class="alert alert-danger">
        
            {{$errResponse->message}}
        	</div>
 
 
 
 <div class="container-fluid">
	 
<p class=" text-info">Sept 03,2017,09:00 pm </p>
      </div>
        
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">forget Password</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
                              
                      
                     
                   
                       <div class="col-md-6 col-sm-6 col-left-spce">
									<label>Password</label> <input type="password" name="password"
										value="" placeholder="Enter your Password" />
								</div>
						
                      
                      
                   <div class="col-md-6 col-sm-6 col-right-spce">
									<label>Confirm Password</label> <input type="password" name="password"
										value="" placeholder="Enter your Password" />
								</div>
						
  
                                <div class = "row">
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>Username</label> <input type="email"
										class="form-control" aria-describedby="emailHelp" name="email"
										value="" placeholder="Enter your Email" required />
								</div>
							
                        </div>
                        
                       
                     
                      
                    
                 

                </div>
              </div>
            </div>
                 <div class="row login-btn-rw">
								<input type="hidden" name=_token value="{{csrf_token()}}" />
								<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<input type="submit" class="cmn-btn chk btn-register"
										value="Register" />
								</div>
							</div>
         
      
    
    
	

 @endisset
@endsection

 
