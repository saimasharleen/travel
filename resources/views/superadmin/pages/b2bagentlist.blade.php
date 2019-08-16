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
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                              <button class="btn btn-lg btn-danger pull-left"><i class="glyphicon glyphicon-ok-sign"></i>Block</button></label>
                              <button class="btn btn-lg btn-success pull-right"><i class="glyphicon glyphicon-ok-sign"></i>Unblock</button></label>
                            </td>
                          </tr>
                          
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

          @endsection
@section('title')
    B2Buserlist 
  @endsection