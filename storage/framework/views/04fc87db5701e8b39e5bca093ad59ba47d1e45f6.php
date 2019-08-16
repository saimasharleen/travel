<?php $__env->startSection('content'); ?>

        <div class="main-panel">
          <div class="content-wrapper">
                    <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Registration form</h4>
                        <p class="card-description">Information Form </p>
                        <form class="forms-sample" method="post" action="<?php echo e(url('superadmin/pages/mail')); ?>">
                          <?php echo csrf_field(); ?>

                          <?php if(Session::has("success")): ?>
                          <div class="alert alert=success">
                            <b>Successful</b>,your email sent.
                          <?php endif; ?>
                          <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control" name="subject" autofocus>
                          </div>
                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" autofocus>
                          </div>
                          <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" rows="10" cols="40" autofocus></textarea>
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Send Email</button>
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
    Sendemail
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\19-2\ATP-3\travel\resources\views/superadmin/pages/mail.blade.php ENDPATH**/ ?>