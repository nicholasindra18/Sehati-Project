<nav>
  <div class="logo"><a href="/admin"><img src="<?php echo e(asset('assets/Logo.jpg')); ?>" alt="Bake & Take" width="60px" height="60px"></a></div>
  <button class="user">
    <img src="<?php echo e(asset('assets/User/user.png')); ?>" alt="User" width="35px" height="35px">
    <h4>Welcome, Admin &#x25BC;</h4>
  </button>
  <div class="dropdown">
    <div class="logout">
      <form action="/" method="post">
        <?php echo csrf_field(); ?>
        <button type="submit"><img src="<?php echo e(asset('assets/User/logout.png')); ?>" alt="Log Out" width="40px" height="25px"> Log Out</button>
      </form>
    </div>
  </div>
</nav><?php /**PATH C:\Kuliah\Software Engineering\Project\Sehatin\resources\views/components/admin-navbar.blade.php ENDPATH**/ ?>