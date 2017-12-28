@extends('layout.register')
@section ('content')


	@isset($arrResponse) @foreach ($arrResponse['errors'] as $key => $value
	)
	<div class="alert alert-danger">

		@if(is_array($value)) @foreach ($value as $s) {{$key}}: {{ $s }}<br>
		@endforeach
	</div>
	@endif @endforeach @endisset @isset($suc)
	<div class="alert alert-success">

		<strong>{{($suc->message)}}</strong>


	</div>
	@endisset


	<div class="container-fluid">
		<form method="post" action="/assistantregister">
			<div class="row">
				<div
					class="col-xs-10 col-sm-10 col-md-6 col-lg-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3 col-lg-offset-3">
					<div class="login-bx">
						<h1 class="login">Assistant Registration</h1>
						<div class="login-form">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>First Name</label> <input type="text" name="first_name"
										value="{{old('first_name')}}" placeholder="Enter your First Name" maxlength=25
										required />
								</div>
								<div class="col-md-6 col-sm-6 col-left-spce">
									<label>Last Name</label> <input type="text" name="last_name"
										value="{{old('last_name')}}" placeholder="Enter your Last Name" maxlength=25
										required />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>Mobile No.</label> <input type="text" name="Mobile_no"
										value="" placeholder="Enter your Mobile Number" maxlength=10
										required />
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 col-sm-6 col-left-spce">
									<label>Email</label> <input type="email"
										class="form-control" aria-describedby="emailHelp" name="email"
										value="" placeholder="Enter your Email" required />
								</div>
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>Designation</label> <input type="text" name="designation"
										value="" placeholder="Enter your Designation" />
								</div>
							</div>
							
							
							
								
								<div class="row">
								<div class="col-md-6 col-sm-6 col-left-spce">
									<label>Clinic Id</label> <input type="text" name="clinic_id"
										value="" placeholder="Enter your clinic id" maxlength=25
										required />
								</div>
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>IAP No.</label> <input type="text" name="iap_no"
										value="" placeholder="Enter your iap_no" />
								</div>
								</div>
								
								<div class="row">
								<div class="col-md-6 col-sm-6 col-left-spce">
									<label>MCI No.</label> <input type="text" name="mci_no"
										value="" placeholder="Enter your clinic id" maxlength=25
										 />
								</div>
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>Prefix</label> <select name="initial">
										<option hidden=>Select Prefix</option>
										<option>Dr.</option>
										<option>Mr.</option>
										<option>Ms.</option>
									</select> 
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

@endsection
