@extends('layouts.superadmin')
@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">    profile</h4>
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
	Edit Profile
	@endsection