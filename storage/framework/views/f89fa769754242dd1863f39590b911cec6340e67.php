<?php $__env->startSection('container'); ?>
<div class="forgot-password-box">Forgot Password</div>
<div class="forgot-password-form">
    <form action="/login/forgot-password" method="post">
        <?php echo csrf_field(); ?>
        <div class="forgot-password-form-bar">
            <label for="email">Email <span style="color: red">*</span></label><br>
            <input type="email" name="email" placeholder="Insert Your Email..." value="<?php echo e(old('email')); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-msg"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div class="forgot-password-btn">
            <button type="submit">Submit</button>
          </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuliah\Software Engineering\Project\Sehatin\resources\views/guest/forgot-password.blade.php ENDPATH**/ ?>