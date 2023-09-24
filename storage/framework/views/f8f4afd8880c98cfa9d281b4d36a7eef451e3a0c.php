<?php $__env->startSection('container'); ?>
    <?php echo $__env->make('components.user-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="fav-main-container">
        <div class="fav-top-container">
            <img src="<?php echo e(asset('assets/Icon/heart.jpg')); ?>" alt="Gambar Hati" width="80px" height="68px">
            <div class="fav-fav-text">Favorite</div>
        </div>
        <div class="fav-inner-container">
            <?php $__currentLoopData = $favorites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favorite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="display-fav-container">
                    <img src="<?php echo e(Storage::url($favorite->obat->obat_photo)); ?>" alt="Gambar Kue" width="206px" height="203px">
                    <div class="fav-detail-container">
                        <div class="fav-nama-kue"><?php echo e($favorite->obat->obat_name); ?></div>
                        <div class="fav-harga">Rp.<?php echo e($favorite->obat->obat_price); ?></div>
                        <a href="/user/product-detail/<?php echo e($favorite->obat_id); ?>" class="see-details">See Details</a>
                    </div>
                    <div class="details-fav-btn">
                        <form action="/user/favorite" method="post">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="favoriteId" value="<?php echo e($favorite->id); ?>">
                            <button type="submit" class="remove-favorite-btn">
                                <img src="<?php echo e(asset('assets/Transaction/heart.png')); ?>" alt="Gambar Kue" width="30px" height="30px" class="delete-fav-img">
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuliah\Software Engineering\Project\Sehatin\resources\views/user/favorite.blade.php ENDPATH**/ ?>