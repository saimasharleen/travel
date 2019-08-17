@extends('layouts.superadmin')
@section('style')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection
@section('content')
<div class="main-panel">
                  <div class="col-sm-2">
                    <form class="ml-auto search-form d-none d-md-block" action="#">
                     <div class="form-group">
                     <input type="search" id="searchf" class="form-control" placeholder="Search Here">
                     </div>
                    </form>
              </div>
                    <div class="table-responsive">
                      <table class="table info-table">
                        <br>
                        <center><h3>Flight Agent List</h3></center>
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
<script type="text/javascript">
$('#searchf').on('keyup',function(){
$value=$(this).val();
console.log($value);
$.ajax({
type : 'get',
url : '{{URL::to('searchf')}}',
data:{'search':$value},
success:function(data){
  console.log(data);
$('tbody').html(data);
}
});
})
</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
          @endsection
@section('title')
    Flightagentlist 
  @endsection