@extends('layout.default') @section ('content')

@isset($errorRes) 
		@foreach ($errorRes['errors'] as $key => $value )
        	<div class="alert alert-danger">
        
        		@if(is_array($value)) 
        			@foreach ($value as $s) 
        				{{$key}}: {{ $s }}<br>
        			@endforeach
        	</div>
				@endif 
		@endforeach 
@endisset 


@isset($response)
<div class="container">
<form class="form-horizontal" role="form" method="post" action="">

    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
         
          
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Personal info</h3>
       
        <div class="form-group">
            <label class="col-lg-3 control-label" >ID:</label>
            <div class="col-lg-8">
              <input class="form-control"  name="id" type="hidden" value="{{$response['data']['id']}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="first_name" type="text" value="{{$response['data']['first_name']}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="last_name" type="text" value="{{$response['data']['last_name']}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Certifications:</label>
            <div class="col-lg-8">
              <input class="form-control"  name="certifications" type="text" value="@foreach ($response['data']['certifications'] as $key => $value )
         @if(is_array($value)) 
        	@foreach ($value as $s) {{($key+1)}}:{{($s)}} @endforeach
          @endif 
 @endforeach ">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Specialization:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="specialization" value= " @foreach ($response['data']['specilization'] as $key => $val )
        	                   @if(is_array($val)) 
        			              @foreach ($val as $d) 
        				          {{($key+1)}}: {{($d)}}
        			              @endforeach
        	                   @endif 
		                    @endforeach">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="{{$response['data']['email']}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">MOBILE NUMBER:</label>
            <div class="col-md-8">
              <input class="form-control" name="contact_mobile" type="text" value="{{$response['data']['contact_mobile']}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">City:</label>
            <div class="col-md-8">
              <input class="form-control" name="city" type="text" value="{{$response['data']['city']}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">DOB:</label>
            <div class="col-md-8">
              <input class="form-control" name="dob" type="date" value="{{$response['data']['dob']}}">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Address Line1:</label>
            <div class="col-md-8">
              <input class="form-control"  name="address_line1" type="text" value="{{$response['data']['address_line1']}}">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Address Line2:</label>
            <div class="col-md-8">
              <input class="form-control"  name="address_line2" type="text" value="{{$response['data']['address_line2']}}">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">IAP Membership:</label>
            <div class="col-lg-8">
              <input class="form-control" name="iap_no" type="text" value="{{$response['data']['iap_no']}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">MCI Membership:</label>
            <div class="col-lg-8">
              <input class="form-control" name="mci_no" type="text" value="{{$response['data']['mci_no']}}">
            </div>
          </div>
          
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="hidden" name=_token value="{{csrf_token()}}" />
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        
      </div>
  </div>
  </form>
</div>
<hr>




@endisset

@endsection
