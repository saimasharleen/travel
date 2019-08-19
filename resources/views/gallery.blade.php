@extends('layouts.main')
@section('content')

<div class="main">
  <div class="content">
    <div class="container_12">
      <div class="grid_12">
        <h3>Our Gallery</h3>
      </div>
      <div class="clear"></div>
      <div class="gallery">
  
              <ul>
                @foreach ($gals as $gal)
              
               
        <div class="grid_4"> <li><img src="/images/{{$gal->image}}" alt=""></li> </div>
        <div class="grid_4"> <a href="images/big3.jpg" class="gal img_inner"><img src="images/page3_img3.jpg" alt=""></a> </div>
        <div class="clear"></div>
        <div class="grid_4"> <a href="images/big4.jpg" class="gal img_inner"><img src="images/page3_img4.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big5.jpg" class="gal img_inner"><img src="images/page3_img5.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big6.jpg" class="gal img_inner"><img src="images/page3_img6.jpg" alt=""></a> </div>
        <div class="clear"></div>
        <div class="grid_4"> <a href="images/big7.jpg" class="gal img_inner"><img src="images/page3_img7.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big8.jpg" class="gal img_inner"><img src="images/page3_img8.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big9.jpg" class="gal img_inner"><img src="images/page3_img9.jpg" alt=""></a> </div> 
            
              </ul>
         
        @endforeach
      </div>
      <div class="clear"></div>
    </div>
  </div>
  
 @endsection
  @section('title')
    Gallery
  @endsection
