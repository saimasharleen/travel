@extends('layouts.superadmin')
@section('style')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection

@section('content')
<hr>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10"><h1>User name</h1></div>
        <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->

        	<form method="post" enctype="multipart/form-data">
                @csrf
	            <div class="text-center">
	                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
	                <h6>Upload a different photo...</h6>
	                <input type="file" class="text-center center-block file-upload" name="image">
	               

	            </div></hr><br>

               </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
                <li class="active"><a data-toggle="tab" href="#edit-profile">Edit Profile</a></li>
                <li><a data-toggle="tab" href="#change-password">Change Password</a></li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="profile">
                    <hr>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>First name</h4></label>
                                <br>
                                <label>{{$user->firstname}}</label>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                <br/>
                                <label>{{$user->lastname}}</label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="username"><h4>Username</h4></label>
                                <br/>
                                <label>{{$user->username}}</label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <br/>
                                <label>{{$user->email}}</label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="cname"><h4>Company Name</h4></label>
                                <br>
                                <label>{{$user->cname}}</label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="licenseno"><h4>License No</h4></label>
                                <br>
                                <label>{{$user->licenseno}}</label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <br>
                                <label>{{$user->contactno}}</label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="city"><h4>City</h4></label>
                                <br>
                                <label>{{$user->city}}</label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="address"><h4>Address</h4></label>
                                <br>
                                <label>{{$user->address}}</label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="postalcode"><h4>Postalcode</h4></label>
                                <br>
                                <label>{{$user->postalcode}}</label>
                            </div>
                        </div>

                </div><!--/tab-pane-->
                <div class="tab-pane" id="edit-profile">

                    <h2></h2>

                    <hr>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>First name</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" value="{{$user->firstname}}" >
                            </div>
                        </div>
                        
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" value="{{$user->lastname}}" >
                            </div>
                        </div>
                        
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="username"><h4>Username</h4></label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="username" value="{{$user->username}}" >
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                
                                <label for="cname"><h4>Company Name</h4></label>
                                <input type="text" class="form-control" name="cname" id="cname" placeholder="company name" value="{{$user->cname}}" >
                            </div>
                        </div>
                        

                        <div class="form-group">

                            <div class="col-xs-6">
                                
                                <label for="contactno"><h4>Phone Number</h4></label>
                                <input type="text" class="form-control" name="contactno" id="contactno" placeholder="contactno" value="{{$user->contactno}}" >
                            </div>
                        </div>
                        
                        <div class="form-group">

                            <div class="col-xs-6">
                                
                                <label for="city"><h4>City</h4></label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="city" value="{{$user->city}}" >
                            </div>
                        </div>
                        
                        <div class="form-group">

                            <div class="col-xs-6">
                                
                                <label for="address"><h4>Address</h4></label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="address" value="{{$user->address}}" >
                            </div>
                        </div>
                        
                        <div class="form-group">

                            <div class="col-xs-6">
                                
                                <label for="postalcode"><h4>Postalcode</h4></label>
                                <input type="text" class="form-control" name="postalcode" id="postalcode" placeholder="postalcode" value="{{$user->postalcode}}" >
                            </div>
                        </div>
                        
                   </div><!--/tab-pane-->
                <div class="tab-pane" id="change-password">

                    <hr>
                             <div class="col-xs-7">
                                <label for="password"><h4>New Password</h4></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password" value="{{$userlogin->password}}">
                            </div>

                        <div class="form-group">

                            <div class="col-xs-7">
                                <label for="confirm_password"><h4>Confirm Password</h4></label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="confirm password" title="enter your confirm password.">
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
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->
</div>
@endsection
	

	@section('title')
	Profile
	@endsection