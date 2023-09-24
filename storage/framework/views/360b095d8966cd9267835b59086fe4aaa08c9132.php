<?php $__env->startSection('container'); ?>
    <div class="inner-container">
        <div class="text">Payment Succeed!</div>
        <img src="<?php echo e(asset('assets/Icon/Check.jpg')); ?>" alt="check" class="img">
    </div>
    <div class="tutup-container">
        <a href="/user" class="tutup">BACK</a> 
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.succeed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuliah\Software Engineering\Project\Sehatin\resources\views/user/payment-success.blade.php ENDPATH**/ ?>