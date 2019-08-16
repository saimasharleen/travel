<?php $__env->startSection('content'); ?>

        <div class="main-panel">
          <div class="content-wrapper">
                    <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Advertisement Post</h4>
                        
    <form method="post"  enctype="multipart/form-data">
      <?php echo e(csrf_field()); ?>

      <table>

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
    Advertisement Post
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\19-2\ATP-3\travel\resources\views/superadmin/pages/advertisement.blade.php ENDPATH**/ ?>