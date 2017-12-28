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


	<div class="container-fluid">
		<form method="post" action="/register">
			<div class="row">
				<div
					class="col-xs-10 col-sm-10 col-md-6 col-lg-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3 col-lg-offset-3">
					<div class="login-bx">
						<h1 class="login">Doctor Registration</h1>
						<div class="login-form">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>Prefix</label> <select name="initial">
										<option hidden=>Select Prefix</option>
										<option>Dr.</option>
										<option>Mr.</option>
										<option>Ms.</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>First Name</label> <input type="text" name="first_name"
										value="" placeholder="Enter your First Name" maxlength=25
										required />
								</div>
								<div class="col-md-6 col-sm-6 col-left-spce">
									<label>Last Name</label> <input type="text" name="last_name"
										value="" placeholder="Enter your Last Name" maxlength=25
										required />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>Mobile No.</label> <input type="text" name="Mobile_no"
										value="" placeholder="Enter your Mobile Number" maxlength=10
										required />
								</div>
								<div class="col-md-6 col-sm-6 col-left-spce">
									<label>Phone No.</label> <input type="text" name="contact_work"
										value="" placeholder="Enter your Phone Number" maxlength=11 />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>MCI No.</label> <input type="text" name="mci_no" maxlength=25
										value="" placeholder="Enter your MCI Number" required />
								</div>
								<div class="col-md-6 col-sm-6 col-left-spce">
									<label>IAP Membership No.</label> <input type="text"
										name="iap_no" value="" maxlength=50
										placeholder="Enter your IAP Membership Number" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>Username</label> <input type="email"
										class="form-control" aria-describedby="emailHelp" name="email"
										value="" placeholder="Enter your Email" required />
								</div>
								<div class="col-md-6 col-sm-6 col-left-spce">
									<label>Password</label> <input type="password" name="password"
										value="" placeholder="Enter your Password" />
								</div>
							</div>
							<div class="row login-btn-rw">
								<input type="hidden" name=_token value="{{csrf_token()}}" />
								<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<input type="submit" class="cmn-btn chk btn-register"
										value="Register" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</form>
	</div>
</body>
@endsection
