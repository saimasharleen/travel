<?php $__env->startSection('content'); ?>
        
        <div class="main-panel">
          <h3 style="color:Tomato;"> <?php echo e(Session::get('message')); ?> </h3> 
          <div class="content-wrapper">
                    <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 align="center"><b>Notice Post</b></h4>
                        <form class="forms-sample" method="post" action="">
                          <?php echo csrf_field(); ?>
                          <div class="form-group">
                            <label>Notice Post</label>
                            <textarea name="postd" rows="10" cols="40" autofocus></textarea>
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Send Notice</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  </div>

                  <div>
                    <?php if($errors->any()): ?>
                     <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php echo e($err); ?> <br>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                  </div>
                  
          <?php $__env->stopSection(); ?>
          <!-- content-wrapper ends -->
          <?php $__env->startSection('footer'); ?>
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
              </span>
            </div>
          </footer>
          <!-- partial -->
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('title'); ?>
    Notice Post
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\19-2\ATP-3\travel\resources\views/superadmin/pages/notice.blade.php ENDPATH**/ ?>