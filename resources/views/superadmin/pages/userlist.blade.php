@extends('layouts.superadmin')
@section('style')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection
@section('content')


{{-- <script>
  $(document).ready(function(){

    @foreach($userlogin as $user)
         $("#selectDiv{{$user->id}}").hide();
     $("#showSelectDiv{{$user->id}}").click(function(){
      $("#selectDiv{{$user->id}}").show();
    });
    $("#loginstatus{{$user->id}}").change(function(){
      var status = $("#loginstatus{{$user->id}}").val();
      var id = $("#userid").val()
      if(status==""){
        alert("Please select an option");
      }else{
        $.ajax({
          url: '{{url("/superadmin/pages/banuser")}}',
          data: 'status=' + status + '&userid=' + id,
          type: 'get',
          success:function(response){
            console.log(response);
          }
        });
      }
    
    });
    @endforeach
  });
  
</script> --}}
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
                            {{-- <th>Action</th> --}}
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($userlogin as $user)
                          <tr>
                    
                            <td>{{$user->email}}</td>
                            <td>{{$user->usertype}}</td>
                            <td>
                              @if ($user->status == 0)
                                {{-- expr --}}
                                <a href="{{route('userlist.block', [$user->id])}}"><button>Block</button></a>
                              
                              @elseif($user->status == 1)
                              <a href="{{route('userlist.unblock', [$user->id])}}"><button>UnBlock</button></a>
                              @endif
                            </td>
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
