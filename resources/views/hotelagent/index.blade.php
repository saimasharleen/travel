@extends('layouts.hotelagent')
@section('style')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection
@section('content')
<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
            <div class="text mb-5 pb-3">
              <h2>Hotels &amp; Resorts</h2>
            </div>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
            <div class="text mb-5 pb-3">
              <h1 class="mb-3">Enjoy A Luxury Experience</h1>
              <h2>Join With Us</h2>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-booking">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form action="#" class="booking-form">
              <div class="row">
                <div class="col-md-3 d-flex">
                  <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                    <div class="wrap">
                      <label for="#">Check-in Date</label>
                      <input type="text" id="check-in-date" class="form-control checkin_date" placeholder="Check-in date">
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex">
                  <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                    <div class="wrap">
                      <label for="#">Check-out Date</label>
                      <input type="text" id="check-out-date" class="form-control checkout_date" placeholder="Check-out date">
                  </div>
                  </div>
                </div>
                <div class="col-md d-flex">
                  <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                    <div class="wrap">
                      <label for="#">Room</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="room" id="room" class="form-control">
                            <option value="suite">Suite</option>
                            <option value="family">Family Room</option>
                            <option value="deluxe">Deluxe Room</option>
                            <option value="classic">Classic Room</option>
                            <option value="superior">Superior Room</option>
                            <option value="luxury">Luxury Room</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex">
                  <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                    <div class="wrap">
                      <label for="#">City</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="city" id="city" class="form-control">
                            <option value="dhaka">Dhaka</option>
                            <option value="seoul">Seoul</option>
                            <option value="busan">Busan</option>
                            <option value="incheon">Incheon</option>
                            <option value="jeju">Jeju</option>
                            <option value="changwon">changwon</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex">
                  <div class="form-group d-flex align-self-stretch">
                    <input type="submit" value="Check Availability" class="btn btn-primary py-3 px-4 align-self-stretch">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section ftc-no-pb ftc-no-pt">
      <div class="container">
        <div class="row">
         


        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Rooms</h2>
          </div>
        </div>        
        <div class="row">
          <div class="col-sm col-md-6 col-lg-4 ftco-animate">
            <div class="room">
              <a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/room-1.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3 text-center">
                <h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
                <p><span class="price mr-2">$120.00</span> <span class="per">per night</span></p>
                <hr>
                <p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg-4 ftco-animate">
            <div class="room">
              <a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/room-2.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3 text-center">
                <h3 class="mb-3"><a href="rooms.html">Family Room</a></h3>
                <p><span class="price mr-2">$20.00</span> <span class="per">per night</span></p>
                <hr>
                <p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg-4 ftco-animate">
            <div class="room">
              <a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/room-3.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3 text-center">
                <h3 class="mb-3"><a href="rooms.html">Deluxe Room</a></h3>
                <p><span class="price mr-2">$150.00</span> <span class="per">per night</span></p>
                <hr>
                <p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg-4 ftco-animate">
            <div class="room">
              <a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/room-4.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3 text-center">
                <h3 class="mb-3"><a href="rooms.html">Classic Room</a></h3>
                <p><span class="price mr-2">$130.00</span> <span class="per">per night</span></p>
                <hr>
                <p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg-4 ftco-animate">
            <div class="room">
              <a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/room-5.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3 text-center">
                <h3 class="mb-3"><a href="rooms.html">Superior Room</a></h3>
                <p><span class="price mr-2">$300.00</span> <span class="per">per night</span></p>
                <hr>
                <p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg-4 ftco-animate">
            <div class="room">
              <a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/room-6.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3 text-center">
                <h3 class="mb-3"><a href="rooms.html">Luxury Room</a></h3>
                <p><span class="price mr-2">$500.00</span> <span class="per">per night</span></p>
                <hr>
                <p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   
   
    
    

@endsection