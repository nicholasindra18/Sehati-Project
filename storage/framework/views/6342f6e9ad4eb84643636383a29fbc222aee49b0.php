<?php $__env->startSection('container'); ?>
  <?php echo $__env->make('components.user-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="profile-container">
    <div class="profile-box">Profile</div>
    <div class="profile-content">
      <div class="fullname">
        <h3><span class="label">Fullname</span>: <?php echo e(auth()->user()->fullname); ?></h3>
      </div>
      <div class="email">
        <h3><span class="label">Email</span>: <?php echo e(auth()->user()->email); ?></h3>
      </div>
      <div class="phone_number">
        <h3><span class="label">Phone Number</span>: <?php echo e(auth()->user()->phone_number); ?></h3>
      </div>
      <div class="dob">
        <h3><span class="label">Date of Birth</span>: <?php echo e(date('d M Y', strtotime(auth()->user()->dob))); ?></h3>
      </div>
      <div class="address">
        <h3><span class="label">Address</span>: <?php echo e(auth()->user()->address); ?></h3>
      </div>
      <div class="profile-btn">
        <a href="/user/profile/change-password"><button>Change Password</button></a>
        <a href="/user/profile/update-profile"><button>Edit Profile</button></a>
      </div>
    </div>
  </div>
  <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuliah\Software Engineering\Project\Sehatin\resources\views/user/profile.blade.php ENDPATH**/ ?>