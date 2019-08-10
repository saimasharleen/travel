@extends('layouts.superadmin')
@section('content')

        <div class="main-panel">
          <div class="content-wrapper">
                    <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Registration form</h4>
                        <p class="card-description">Information Form </p>
                        <form class="forms-sample" method="post" action="{{url('superadmin/pages/mail')}}">
                          @csrf

                          @if(Session::has("success"))
                          <div class="alert alert=success">
                            <b>Successful</b>,your email sent.
                          @endif
                          <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control" name="subject" autofocus>
                          </div>
                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" autofocus>
                          </div>
                          <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" rows="10" cols="40" autofocus></textarea>
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Send Email</button>
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
    Sendemail
  @endsection