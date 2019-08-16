<?php $__env->startSection('content'); ?>

<div class="main">
  <div class="content">
    <div class="container_12">
      <div class="grid_9">
        <h3>Special Tours</h3>
        <div class="tours">
          <div class="grid_4 alpha">
            <div class="tour"> <img src="images/page4_img1.jpg" alt="" class="img_inner fleft">
              <div class="extra_wrapper">
                <p class="text1">Gellentesque imperdiet </p>
                <p class="price">Lorem ipsum dolor sit amet <span>From $ 399</span></p>
                <p class="price">Suspendisse jew wligulawe <span>From $ 299</span></p>
                <a href="#" class="btn">Details</a> </div>
            </div>
          </div>
          <div class="grid_4 omega">
            <div class="tour"> <img src="images/page4_img2.jpg" alt="" class="img_inner fleft">
              <div class="extra_wrapper">
                <p class="text1">Mellentesquj mperdiete </p>
                <p class="price">Dorem ium dolor sit amet <span>From $ 399</span></p>
                <p class="price">Huspendisse jew eligulawe <span>From $ 299</span></p>
                <a href="#" class="btn">Details</a> </div>
            </div>
          </div>
          <div class="clear"></div>
          <div class="grid_4 alpha">
            <div class="tour"> <img src="images/page4_img3.jpg" alt="" class="img_inner fleft">
              <div class="extra_wrapper">
                <p class="text1">Holellentesq imperdiet</p>
                <p class="price">Sorem ipsum olor sit amety <span>From $ 499</span></p>
                <p class="price">Apendisse jow wligulawet <span>From $ 599</span></p>
                <a href="#" class="btn">Details</a> </div>
            </div>
          </div>
          <div class="grid_4 omega">
            <div class="tour"> <img src="images/page4_img4.jpg" alt="" class="img_inner fleft">
              <div class="extra_wrapper">
                <p class="text1">Gellentesque imperdiet </p>
                <p class="price">Lorem ipsum dolor sit amet <span>From $ 399</span></p>
                <p class="price">Suspendisse jew wligulawe <span>From $ 299</span></p>
                <a href="#" class="btn">Details</a> </div>
            </div>
          </div>
          <div class="clear"></div>
          <div class="grid_4 alpha">
            <div class="tour"> <img src="images/page4_img5.jpg" alt="" class="img_inner fleft">
              <div class="extra_wrapper">
                <p class="text1">Fdaellensque perdiet </p>
                <p class="price">Gorem sum dolor sit met <span>From $ 399</span></p>
                <p class="price">Xuspendisse wew ligulawe <span>From $ 299</span></p>
                <a href="#" class="btn">Details</a> </div>
            </div>
          </div>
          <div class="grid_4 omega ">
            <div class="tour"> <img src="images/page4_img6.jpg" alt="" class="img_inner fleft">
              <div class="extra_wrapper">
                <p class="text1">Mellentesquj mperdiete</p>
                <p class="price">Sorem ipsum olor sit amety<span> From $ 399</span></p>
                <p class="price">Suspendisse jew wligulawe <span>From $ 299</span></p>
                <a href="#" class="btn">Details</a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid_3">
        <h3>Browse Tours</h3>
        <form method="post" id="form1" class="form1" action="#">
          <label class="mb0"> <span>Browse by Tour Operator</span>
            <select name="select">
              <option value="">Browse by Tour Operator</option>
              <option value="">...</option>
            </select>
          </label>
          <div class="clear"></div>
          <a onClick="document.getElementById('form1').submit()" href="#" class="btn"> Search</a>
        </form>
        <h3>Search Tours</h3>
        <form method="post" id="form2" class="form1" action="#">
          <label > <span><span class="col1">All Tour Operators</span><br>
            Destination</span>
            <select name="select">
              <option value="">Any destination</option>
              <option value="">...</option>
            </select>
          </label>
          <label > <span>Departing</span>
            <select name="select">
              <option value="">Any departing</option>
              <option value="">...</option>
            </select>
          </label>
          <label> <span>Price</span>
            <select name="select">
              <option value="">Any price</option>
              <option value="">...</option>
            </select>
          </label>
          <label class="mb0"> <span>Duration</span>
            <select name="select">
              <option value="">Any duration</option>
              <option value="">...</option>
            </select>
          </label>
          <div class="clear"></div>
          <a onClick="document.getElementById('form2').submit()" href="#" class="btn"> Search</a>
        </form>
      </div>
      <div class="clear"></div>
    </div>
  </div>
 <?php $__env->stopSection(); ?>
  <?php $__env->startSection('title'); ?>
    Tours
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\19-2\ATP-3\travel\resources\views/tours.blade.php ENDPATH**/ ?>