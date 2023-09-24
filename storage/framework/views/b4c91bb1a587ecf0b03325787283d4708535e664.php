<nav>
  <div class="logo"><a href="/user"><img src="<?php echo e(asset('assets/Logo1.jpg')); ?>" alt="Bake & Take" width="60px" height="60px"></a></div>
  <div class="navbar-menu">
    <a class="menu home" href="#home">Home</a>
    <a class="menu category" href="#category">Category</a>
    <a class="menu user-menu" href="#menu">Menu</a>
    <a class="menu user-about-us" href="#user-about-us">Maps</a>
  </div>
  <div class="home-fav-transaction">
    <a href="/user/favorite"><button class="favorite-btn"><img src="<?php echo e(asset('assets/User/favorite.png')); ?>" alt="Favorite" width="25px" height="25px"></button></a>
    <a href="/user/transaction"><button class="transaction-btn"><img src="<?php echo e(asset('assets/User/transaction.png')); ?>" alt="Transaction" width="25px" height="25px"></button></a>
  </div>
  <button class="user" type="button">
    <img src="<?php echo e(asset('assets/User/user.png')); ?>" alt="User" width="20px" height="20px">
    <h4>Welcome, <?php echo e(auth()->user()->fullname); ?> &#x25BC;</h4>
  </button>
  <div class="user-dropdown">
    <div class="my-profile">
      <a href="/user/profile"><button><img src="<?php echo e(asset('assets/User/profile.png')); ?>" alt="Log Out" width="37px" height="31px"> My Profile</button></a>
    </div>
    <div class="logout">
      <form action="/" method="post">
        <?php echo csrf_field(); ?>
        <button type="submit"><img src="<?php echo e(asset('assets/User/logout.png')); ?>" alt="Log Out" width="40px" height="25px"> Log Out</button>
      </form>
    </div>
  </div>
</nav><?php /**PATH C:\Kuliah\Software Engineering\Project\Sehatin\resources\views/components/user-home-navbar.blade.php ENDPATH**/ ?>