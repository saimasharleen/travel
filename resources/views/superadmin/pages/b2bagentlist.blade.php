@extends('layouts.superadmin')
@section('content')
<div class="main-panel">
                  
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Username</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($user as $user)
                          <tr>
                            <td>{{$user->firstname}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                          </tr>
                          @endforeach
                          
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

          @endsection
@section('title')
    B2Buserlist 
  @endsection