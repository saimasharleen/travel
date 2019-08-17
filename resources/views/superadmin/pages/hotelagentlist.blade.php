@extends('layouts.superadmin')
@section('content')
<div class="main-panel">
                  <div class="col-sm-2">
                    <form class="ml-auto search-form d-none d-md-block" action="#">
                     <div class="form-group">
                     <input type="search" class="form-control" placeholder="Search Here">
                     </div>
                    </form>
              </div>
                    <div class="table-responsive">
                      <table class="table info-table">
                        <br>
                        <center><h3>Hotel Agent List</h3></center>
                        <br>
                        <thead>
                          <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Username</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($userdata as $userdata)
                          <tr>
                            <td>{{$userdata->firstname}}</td>
                            <td>{{$userdata->lastname}}</td>
                            <td>{{$userdata->username}}</td>
                            <td>{{$userdata->email}}</td>
                          </tr>
                          @endforeach
                          
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

          @endsection
@section('title')
    Hotelagentlist 
  @endsection