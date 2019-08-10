@extends('layouts.superadmin')
@section('style')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection
@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="col-12">
			<hr>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10"><h1>User name</h1></div>
    </div>
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a href="/superadmin/pages/profile">Profile</a></li>
                <br>
                <li><a href="/superadmin/pages/editprofile">Edit Profile</a></li>
                <br>
                <li><a href="/superadmin/pages/forgetpassword">Change Password</a></li>
                <br>
            </ul>
                    <hr>
                     <form class="form"  method="post">
                        @csrf

                            <div class="col-xs-7">
                                <label for="password"><h4>Password</h4></label>
                                <input type="password" class="form-control" name="password" placeholder="password">
                            </div>

                        <div class="form-group">

                            <div class="col-xs-7">
                                <label for="newpassword"><h4>New Password</h4></label>
                                <input type="password" class="form-control" name="newpassword" placeholder="new password">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-7">
                                <label for="confirmpassword"><h4>Confirm Password</h4></label>
                                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="confirm password" title="enter your confirm password.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success pull-left" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                        </div>
                    </form>

                </div><!--/tab-pane-->
            </div>
        </div>
  
		</div>
	</div>

	<div>
		@if($errors->any())
		@foreach($errors->all() as $err)
		{{$err}} <br>
		@endforeach
		@endif
	</div>

	@endsection
	<!-- content-wrapper ends -->
	@section('footer')
	<footer class="footer">
		<div class="container-fluid clearfix">
			<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
			<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
			</span>
		</div>
	</footer>
	<!-- partial -->
	@endsection

	@section('title')
	Profile
	@endsection