<?php $__env->startSection('container'); ?>
  <div class="reset-password-box">Reset Password</div>
  <div class="reset-password-form">
    <form action="/reset-password/<?php echo e($user->id); ?>" method="post">
      <?php echo method_field('put'); ?>
      <?php echo csrf_field(); ?>
      <div class="reset-password-form-bar">
        <input type="password" name="new_password" placeholder="New Password">
        <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="reset-password-invalid-msg"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
      <div class="reset-password-form-bar">
        <input type="password" name="confirm_new_password" placeholder="Confirm New Password">
        <?php $__errorArgs = ['confirm_new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="reset-password-invalid-msg"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
      <div class="reset-password-btn">
        <button type="submit">Reset</button>
      </div>
    </form>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuliah\Software Engineering\Project\Sehatin\resources\views/guest/reset-password.blade.php ENDPATH**/ ?>