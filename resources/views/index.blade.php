
@extends('layouts.main')
@section('content')

<div class="main">
  <div class="container_12">
    <div class="grid_12">
      <div class="slider-relative">
        <div class="slider-block">
          <div class="slider"> <a href="#" class="prev"></a><a href="#" class="next"></a>
            <ul class="items">
              <li><img src="images/slide.jpg" alt="">
                <div class="banner">
                  <div>THERE ARE PLENTY OF PLACES</div>
                  <br>
                  <span> that are worth seeing</span> </div>
              </li>
              @foreach ($ads as $ad)
                {{-- expr --}}
              
              <li><img src="images/{{$ad->image}}" alt=""></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container_12">
      <div class="grid_12">
        <h3>Top Destinations</h3>
      </div>
      <div class="boxes">
        <div class="grid_4">
          <figure>
            <div><img src="images/slide.jpg" alt=""></div>
            <figcaption>
              <h3>Venice</h3>
              Lorem ipsum dolor site geril amet, consectetur cing eliti. Suspendisse nulla leo mew dignissim eu velite a rew qw vehicula lacinia arcufasec ro. Aenean lacinia ucibusy fase tortor ut feugiat. Rabi tur oliti aliquam bibendum olor quis malesuadivamu. <a href="#" class="btn">Details</a> </figcaption>
          </figure>
        </div>
        <div class="grid_4">
          <figure>
            <div><img src="images/page1_img2.jpg" alt=""></div>
            <figcaption>
              <h3>New York</h3>
              Psum dolor sit ametylo gerto consectetur ertori hykill holit adipiscing lity. Donecto rtopil osueremo	kollit asec emmodem geteq tiloli. Aliquam dapibus neclol nami wertoli elittro eget vulpoli no
              utaterbil congue turpis in su. <a href="#" class="btn">Details</a> </figcaption>
          </figure>
        </div>
        <div class="grid_4">
          <figure>
            <div><img src="images/page1_img3.jpg" alt=""></div>
            <figcaption>
              <h3>Paris</h3>
              Lorem ipsum dolor site geril amet, consectetur cing eliti. Suspendisse nulla leo mew dignissim eu velite a rew qw vehicula lacinia arcufasec ro. Aenean lacinia ucibusy fase tortor ut feugiat. Rabi tur oliti aliquam bibendum olor quis malesuadivamu. <a href="#" class="btn">Details</a> </figcaption>
          </figure>
        </div>
        <div class="clear"></div>
      </div>
      <div class="grid_8">
        <div id="tabs">
          <ul>
            <li><a href="#tabs-1">last Minute</a></li>
            <li><a href="#tabs-2">hot Deals</a></li>
            <li><a href="#tabs-3">All-Inclusive</a></li>
          </ul>
          <div class="clear"></div>
          <div class="tab_cont" id="tabs-1"> <img src="images/page1_img4.jpg" alt="">
            <div class="extra_wrapper">
              <div class="text1">Rem psum dr sit amet. </div>
              <p class="style1"><a class="col2" href="#">Click here</a> for more info about this free website template created by TemplateMonster.com </p>
              Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro. <a href="#" class="btn">Details</a>
              <div class="clear "></div>
            </div>
            <div class="clear cl1"></div>
            <img src="images/page1_img5.jpg" alt="">
            <div class="extra_wrapper">
              <div class="text1 tx1">Hem psuf abr sit dmety. </div>
              Julla facilisi. Ut ut tincidunt lacus, ut auctor libero. Fuis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisi. Vestibulum eu eleifend metus, ut ornare nibh. Vestibulumul tincidunt interdum libero vitae faucibus. Gonec dapibus feugiate auctor. In ac dapibus lacus. Maecenas in pharetra mim asellus a sagittis dui, eu adipiscinget nisi.
              <div class="clear"></div>
              <a href="#" class="btn bt1">Details</a>
              <div class="clear "></div>
            </div>
          </div>
          <div class="tab_cont" id="tabs-2"> <img src="images/page1_img4.jpg" alt="">
            <div class="extra_wrapper">
              <div class="text1">Rem psum dr sit amet. </div>
              <p class="style1">Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro.</p>
              Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro. <a href="#" class="btn">Details</a>
              <div class="clear "></div>
            </div>
            <div class="clear cl1"></div>
            <img src="images/page1_img5.jpg" alt="">
            <div class="extra_wrapper">
              <div class="text1 tx1">Hem psuf abr sit dmety. </div>
              Julla facilisi. Ut ut tincidunt lacus, ut auctor libero. Fuis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisi. Vestibulum eu eleifend metus, ut ornare nibh. Vestibulumul tincidunt interdum libero vitae faucibus. Gonec dapibus feugiate auctor. In ac dapibus lacus. Maecenas in pharetra mim asellus a sagittis dui, eu adipiscinget nisi.
              <div class="clear"></div>
              <a href="#" class="btn bt1">Details</a>
              <div class="clear "></div>
            </div>
          </div>
          <div class="tab_cont" id="tabs-3"> <img src="images/page1_img4.jpg" alt="">
            <div class="extra_wrapper">
              <div class="text1">Rem psum dr sit amet. </div>
              <p class="style1">Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro.</p>
              Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro. <a href="#" class="btn">Details</a>
              <div class="clear "></div>
            </div>
            <div class="clear cl1"></div>
            <img src="images/page1_img5.jpg" alt="">
            <div class="extra_wrapper">
              <div class="text1 tx1">Hem psuf abr sit dmety. </div>
              Julla facilisi. Ut ut tincidunt lacus, ut auctor libero. Fuis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisi. Vestibulum eu eleifend metus, ut ornare nibh. Vestibulumul tincidunt interdum libero vitae faucibus. Gonec dapibus feugiate auctor. In ac dapibus lacus. Maecenas in pharetra mim asellus a sagittis dui, eu adipiscinget nisi.
              <div class="clear"></div>
              <a href="#" class="btn bt1">Details</a>
              <div class="clear "></div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="newsletter_title">Notices </div>
        <div class="n_container">
          <ul class="list">
            @foreach ($notices as $notice)
            <li>{{$notice->postd}}</li>
              @endforeach
          </ul>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  @endsection
  @section('title')
    HomePage
  @endsection
