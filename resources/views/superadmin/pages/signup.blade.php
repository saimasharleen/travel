@extends('layouts.superadmin')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
                  <h3 style="color:Tomato;"> {{ Session::get('message')}} </h3> 
                    <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Registration form</h4>
                        <p class="card-description">Information Form </p>
                        <form class="forms-sample" method="post">
                          @csrf
                          <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
                          </div>
                          <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
                          </div>
                          <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter User Name">
                          </div>
                          <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label>Usertype</label>
                          </div>
                          <div class="form-radio form-radio-flat disabled">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="usertype" id="flatRadios3" value="b2bagent"> B2B Agent </label>
                          </div>
                          <div class="form-radio form-radio-flat disabled">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="usertype" id="flatRadios3" value="flightagent"> Flight Agent </label>
                          </div>
                          <div class="form-radio form-radio-flat disabled">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="usertype" id="flatRadios3" value="hotelagent"> Hotel Agent </label>
                          </div>
                          <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control" name="cname" placeholder="Company Name">
                          </div>
                          <div class="form-group">
                            <label>License No.</label>
                            <input type="text" class="form-control" name="licenseno" placeholder="licenseno">
                          </div>
                          <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" name="contactno" placeholder="Contact Number">
                          </div>
                          <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" name="city" placeholder="City">
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Address">
                          </div>
                          <div class="form-group">
                            <label>Postal Code</label>
                            <input type="text" class="form-control" name="postalcode" placeholder="postalcode">
                          </div>
                          <div class="form-group">
                            <label>Deposit Amount</label>
                            <input type="text" class="form-control" name="deposit" placeholder="deposit">
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Submit</button>
                          <button class="btn btn-light">Cancel</button>
                        </form>
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
    Signup 
  @endsection