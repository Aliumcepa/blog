@extends('layout.register') @section ('content')
<body>

	@isset($arrResponse) 
		@foreach ($arrResponse['errors'] as $key => $value )
        	<div class="alert alert-danger">
        
        		@if(is_array($value)) 
        			@foreach ($value as $s) 
        				{{$key}}: {{ $s }}<br>
        			@endforeach
        	</div>
				@endif 
		@endforeach 
	@endisset 
	
	@isset($success)
	<div class="alert alert-success">

		<strong>{{($success->message)}}</strong>


	</div>
	@endisset
	
	<div id="content-wrap-reg">
	<form method="post" action="/register">
		<div class="row">
			<div class="col-md-12">
				<div class="cmn-mdle-bx">
					<h1 class="mdle-bx-title">Doctor Registration</h1>
					<div class="mdle-bx-form">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-right-spce">
								<label class="bx-lbl-sml">Prefix</label>
								<select name="initial">
										<option hidden=>Select Prefix</option>
										<option>Dr.</option>
										<option>Mr.</option>
										<option>Ms.</option>
									</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-right-spce">
								<label class="bx-lbl-sml">First Name<span class="ast">*</span></label>
								<input type="text" value="" name="first_name" placeholder="first name"/>
							</div>
							<div class="col-md-6 col-sm-6 col-left-spce">
								<label class="bx-lbl-big">Last Name<span class="ast">*</span></label>
								<input type="text" name="last_name" value="" placeholder="last name"/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-right-spce">
								<label class="bx-lbl-sml">Mobile No.<span class="ast">*</span></label>
								<input type="text"  name="Mobile_no" value="" placeholder="mobile no."/>
							</div>
							<div class="col-md-6 col-sm-6 col-left-spce">
								<label class="bx-lbl-big">Phone No.</label>
								<input type="text" name="contact_work" value="" placeholder="phone no."/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-right-spce">
								<label class="bx-lbl-sml">MCI No.<span class="ast">*</span></label>
								<input type="text" value="" name="mci_no" placeholder="MCI no."/>
							</div>
							<div class="col-md-6 col-sm-6 col-left-spce">
								<label class="bx-lbl-big">IAP Membership No.<span class="ast">*</span></label>
								<input type="text" value="" name="iap_no" placeholder="membership no."/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-right-spce">
								<label class="bx-lbl-sml">Username</label>
								<input type="email" value="" name="email" placeholder="Enter your Username"/>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<h3 class="sub-title-3 bdr-btm-title">SET PASSWORD</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-right-spce">
								<label class="bx-lbl-sml">New Password<span class="ast">*</span></label>
								<input type="text"  name="password" value="" placeholder="new password"/>
							</div>
							<div class="col-md-6 col-sm-6 col-left-spce">
								<label class="bx-lbl-big">Confirm Password<span class="ast">*</span></label>
								<input type="text" name="cpassword" value="" placeholder="re-type password"/>
							</div>
							<div class="col-md-12">
								<span class="note-txt">
									Note: Password must be 6-8 characters, with one numeric and capital letter
								</span>
							</div>
						</div>
						
						
						<div class="row login-btn-rw">
							<div class="col-md-12 col-sm-12 col-xs-12 text-center"><input type="hidden" name=_token value="{{csrf_token()}}" />
							<input type="submit" class="cmn-btn btn-green btn-register-nw" value="Register" /></div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
		</div>
		</body>
		@endsection