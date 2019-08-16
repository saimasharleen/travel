<?php $__env->startSection('style'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<hr>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10"><h1>User name</h1></div>
        <div class="col-sm-2"><a href="" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="<?php echo e(asset('images')); ?>/<?php echo e($user->img); ?>" alt="<?php echo e($user->img); ?>"></a></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->
            <form method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="text-center">
                    <img src="<?php echo e(asset('images')); ?>/<?php echo e($user->img); ?>" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="text-center center-block file-upload" name="image">
                </div>
                </hr>
                <br>
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
                                <label><?php echo e($user->firstname); ?></label>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                <br/>
                                <label><?php echo e($user->lastname); ?></label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="username"><h4>Username</h4></label>
                                <br/>
                                <label><?php echo e($user->username); ?></label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <br/>
                                <label><?php echo e($user->email); ?></label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="cname"><h4>Company Name</h4></label>
                                <br>
                                <label><?php echo e($user->cname); ?></label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="licenseno"><h4>License No</h4></label>
                                <br>
                                <label><?php echo e($user->licenseno); ?></label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <br>
                                <label><?php echo e($user->contactno); ?></label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="city"><h4>City</h4></label>
                                <br>
                                <label><?php echo e($user->city); ?></label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="address"><h4>Address</h4></label>
                                <br>
                                <label><?php echo e($user->address); ?></label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="postalcode"><h4>Postalcode</h4></label>
                                <br>
                                <label><?php echo e($user->postalcode); ?></label>
                            </div>
                        </div>

                </div><!--/tab-pane-->
                <div class="tab-pane" id="edit-profile">

                    <h2></h2>

                    <hr>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>First name</h4></label>
                                <input type="text" class="form-control" name="firstname" id="first_name" placeholder="first name" value="<?php echo e($user->firstname); ?>" >
                            </div>
                        </div>
                        
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                <input type="text" class="form-control" name="lastname" id="last_name" placeholder="last name" value="<?php echo e($user->lastname); ?>" >
                            </div>
                        </div>
                        
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="username"><h4>Username</h4></label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="username" value="<?php echo e($user->username); ?>" >
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                
                                <label for="cname"><h4>Company Name</h4></label>
                                <input type="text" class="form-control" name="cname" id="cname" placeholder="company name" value="<?php echo e($user->cname); ?>" >
                            </div>
                        </div>
                        

                        <div class="form-group">

                            <div class="col-xs-6">
                                
                                <label for="contactno"><h4>Phone Number</h4></label>
                                <input type="text" class="form-control" name="contactno" id="contactno" placeholder="contactno" value="<?php echo e($user->contactno); ?>" >
                            </div>
                        </div>
                        
                        <div class="form-group">

                            <div class="col-xs-6">
                                
                                <label for="city"><h4>City</h4></label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="city" value="<?php echo e($user->city); ?>" >
                            </div>
                        </div>
                        
                        <div class="form-group">

                            <div class="col-xs-6">
                                
                                <label for="address"><h4>Address</h4></label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="address" value="<?php echo e($user->address); ?>" >
                            </div>
                        </div>
                        
                        <div class="form-group">

                            <div class="col-xs-6">
                                
                                <label for="postalcode"><h4>Postalcode</h4></label>
                                <input type="text" class="form-control" name="postalcode" id="postalcode" placeholder="postalcode" value="<?php echo e($user->postalcode); ?>" >
                            </div>
                        </div>
                        
                   </div><!--/tab-pane-->
                <div class="tab-pane" id="change-password">

                    <hr>
                             <div class="col-xs-7">
                                <label for="password"><h4>New Password</h4></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password" value="<?php echo e($userlogin->password); ?>">
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
                    
            </div><!--/tab-pane-->
        </div><!--/tab-content-->
    </div><!--/col-9-->
    </form>
</div><!--/row-->
</div>
<?php $__env->stopSection(); ?>
	

	<?php $__env->startSection('title'); ?>
	Profile
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\19-2\ATP-3\travel\resources\views/superadmin/pages/profile.blade.php ENDPATH**/ ?>