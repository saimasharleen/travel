@extends('layouts.superadmin')
@section('content')
<script>
  $(document).ready(function(){
    $("#loginstatus").change(function(){
    alert('hi');
    });
  });
</script>
<div class="main-panel">
  <br>
                    <div class="table-responsive">
                      <table class="table info-table">
                        <center><h3>User List</h3></center>
                        <br>
                        <thead>
                          <tr>
                            
                            <th>Email</th>
                            <th>Usertype</th>
                            <th>status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($userlogin as $userlogin)
                          <tr>
                    
                            <td>{{$userlogin->email}}</td>
                            <td>{{$userlogin->usertype}}</td>
                            <td>
                              @if($userlogin->status==0)
                                <b style="color:green">enable</b>
                              @else
                                 <b style="color:red">disabled</b>
                              @endif
                              <br>
                              <select id="loginstatus">
                                <option value="0">enable</option>
                                <option value="1">disabled</option>
                              </select>
                            </td>
                            <td><a href="" class="btn btn-fill btn-success">Actions</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

          @endsection
@section('title')
    Userlist 
  @endsection