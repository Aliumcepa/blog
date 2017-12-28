 @extends('layout.register') @section('content')

<body>

	@isset($mes)
	<div class="alert alert-success">
		<strong>{{($mes->message)}}</strong>
	</div>
	@endisset



	<form action="/profile" method="post" enctype="multipart/form-data">
		<!--and action="/register" method="post" enctype="multipart/form-data"-->
		<div class="container-fluid">
			<div class="row">
				<div
					class="col-xs-10 col-sm-10 col-md-6 col-lg-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3 col-lg-offset-3">
					<div class="login-bx">
						<h1 class="login">LOGIN</h1>
						<div class="login-form">
							<div class="row">
								<div class="col-md-12">
									<label>Username</label> <input type="text" name="email"
										placeholder="Enter your username" /> <label>Password</label> <input
										type="password" name="password"
										placeholder="Enter your password" />
								</div>
								<div class="col-md-12">
									<a href="/forgotpassword" class="link">Forgot Password?</a>
								</div>
								

							</div>
							<div class="row login-btn-rw">
								<div class="col-md-6 col-sm-6 col-xs-12 btn-right-spce btn-bx">
									<input type="submit" class="cmn-btn chk" value="Login" />
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12 btn-left-spce">
								<input type="hidden" name=_token value="{{csrf_token()}}" />
									<input type="submit" class="cmn-btn chk btn-login-top-spce"
										value="Register" formaction="/register" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</form>
</body>
@endsection
