@extends('layouts.main')
@section('style')
	<link rel="icon" type="image/png" href="{{asset('login')}}/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="{{asset('login')}}/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('login')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('login')}}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('login')}}/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="{{asset('login')}}/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('login')}}/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('login')}}/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('login')}}/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="{{asset('login')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{asset('login')}}/css/main.css">
@endsection

@section('content')
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					@csrf
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('{{asset('login')}}/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
@endsection	

	
@section('script')	

	<script src="{{asset('login')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="{{asset('login')}}/vendor/animsition/js/animsition.min.js"></script>
	<script src="{{asset('login')}}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{asset('login')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{asset('login')}}/vendor/select2/select2.min.js"></script>
	<script src="{{asset('login')}}/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{asset('login')}}/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="{{asset('login')}}/vendor/countdowntime/countdowntime.js"></script>
	<script src="{{asset('login')}}/js/main.js"></script>
	
@endsection