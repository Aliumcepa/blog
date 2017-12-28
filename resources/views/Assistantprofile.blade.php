 @extends('layout.register')
@section ('content')

{{"The assistant profile is as follows "}}
	@isset($success) 
	 @endisset @isset($suc)
	<div class="alert alert-danger">

		<strong>{{($suc->message)}}</strong>
    </div>
	@endisset
	
	
	<div class="container-fluid">
		<form method="get" action="/assistantprofile">
			<div class="row">
				<div
					class="col-xs-10 col-sm-10 col-md-6 col-lg-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3 col-lg-offset-3">
					<div class="login-bx">
						<h1 class="login">Assistant Profile</h1>
						<div class="login-form">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>First Name</label> <input type="text" name="first_name"
										value="{{$data['first_name']}}"  maxlength=25
										required />
								</div>
								<div class="col-md-6 col-sm-6 col-left-spce">
									<label>Last Name</label> <input type="text" name="last_name"
										value="{{$data['last_name']}}"  maxlength=25
										required />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>Mobile No.</label> <input type="text" name="Mobile_no"
										value="{{$data['contact_mobile']}}"  maxlength=10
										required />
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 col-sm-6 col-left-spce">
									<label>Email</label> <input type="email"
										class="form-control" aria-describedby="emailHelp" name="email"
										value="{{$data['email']}}"  required />
								</div>
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>Designation</label> <input type="text" name="designation"
										value="{{$data['designation']}}"  />
								</div>
							</div>
							
							
							<div class="row">
								<div class="col-md-6 col-sm-6 col-left-spce">
									<label>Clinic Id</label> <input type="text" name="clinic_id"
										value="{{$data['clinic_id']}}" maxlength=25
										 />
								</div>
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>IAP No.</label> <input type="text" name="iap_no"
										value="{{$data['iap_no']}}"  />
								</div>
								</div>
								
								<div class="row">
								<div class="col-md-6 col-sm-6 col-left-spce">
									<label>MCI No.</label> <input type="text" name="mci_no"
										value="{{$data['mci_no']}}"  maxlength=25
										 />
								</div>
								<div class="col-md-6 col-sm-6 col-right-spce">
									<label>Prefix</label> <input type="text" name="initial"
										value="{{$data['initial']}}"  maxlength=25
										 />
								</div>
								</div>
								
								</div>
					</div>
				</div>
			</div>

		</form>
	</div>

@endsection
								
							
							
	
	





