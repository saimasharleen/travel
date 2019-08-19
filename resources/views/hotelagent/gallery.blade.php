@extends('layouts.hotelagent')
@section('content')
        <div class="container">
        <div class="main-panel">
          <div class="content-wrapper">
                    <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Gallery Image Post</h4>
                        
    <form method="post"  enctype="multipart/form-data">
      {{csrf_field()}}
      <table>
        <br>
        <br>
        <br>

          <tr>
              <td>Image</td>
              <td>:</td>
              <td><input type="file" name="image" /></td>

          </tr>

          <tr>
              <td></td>
              <td></td>
              <td><input type="submit" name="submit" value="Submit" /></td>
          </tr>
      </table>

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
                </div>
                  
          @endsection
          <!-- content-wrapper ends -->
          

  @section('title')
    Gallery Image Post
  @endsection