 @extends('layout.register') @section ('content')  
 
 @isset($errResponse)
<div class="alert alert-danger">

	<strong>{{($errResponse->message)}}</strong>
</div>
@endisset

@isset($authError)
<div class="alert alert-danger">

	<strong>{{session($authError)}}</strong>
</div>
@endisset


	
	@isset($updateMessage)
	<div class="alert alert-success">

		<strong>{{ Session::get($updateMessage['message']) }}</strong>
		<!-- {{$myVar['message']}} -->
			</div>
	@endisset


@isset($response)
<div class="container-fluid">
	  
		
		<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="/editdoctorprofile" >Edit Profile</A>

        <A href="/login" >Logout</A>
       <br>
<p class=" text-info">May 05,2014,03:00 pm </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">DOCTOR PROFILE</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      
                      <tr>
                        <td>MCI NO:</td>
                        <td>{{$response['data']['mci_no']}}</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>{{$response['data']['dob']}}</td>
                      </tr>
                   
                             <tr>
                        <td>Gender</td>
                        <td>{{$response['data']['gender']}}</td>
                      </tr>
                        <tr>
                        <td>Address Line1</td>
                        <td>{{$response['data']['address_line1']}}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:{{$response['data']['email']}}">{{$response['data']['email']}}</a></td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td>{{$response['data']['contact_work']}}(Landline)<br><br>{{$response['data']['contact_mobile']}}(Mobile)
                        </td>
                           
                      </tr>
                      
                      <tr>
                        <td>Certifications</td>
                        <td>
                        @foreach ($response['data']['certifications'] as $key => $value )
        	               @if(is_array($value)) 
        			        @foreach ($value as $s) 
        				      {{$key+1}}: {{ $s }}<br>
        			         @endforeach
                            @endif 
		                @endforeach 
                        </td>
                           
                      </tr>
                      
                      <tr>
                        <td>Specialization</td>
                        <td>@foreach ($response['data']['specilization'] as $key => $value )
        	                   @if(is_array($value)) 
        			              @foreach ($value as $s) 
        				          {{$key+1}}: {{ $s }}<br>
        			              @endforeach
        	                   @endif 
		                    @endforeach 
		                </td>
                           </tr>
                      
                       <tr>
                        <td>FIRST NAME</td>
                        <td>{{$response['data']['first_name']}}<br>
                        </td>
                           
                      </tr>
                      
                      <tr>
                        <td>LAST NAME</td>
                        <td>{{$response['data']['last_name']}}<br>
                        </td>
                      </tr>
                     </tbody>
                  </table>

                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>	

	
</div>
 @endisset
@endsection










