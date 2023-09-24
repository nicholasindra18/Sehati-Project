<?php $__env->startSection('container'); ?>
    <?php echo $__env->make('components.admin-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-container">
        <div class="product-container">
            <h1>⚠️ Confirm Your Deletion ⚠️</h1>
            <img src="<?php echo e(Storage::url($obat->obat_photo)); ?>" alt="Gambar Kue" width="350px" height="350px" class="img-kue">
        </div>
        <div class="delete-confirmation">
            <h2>Are you sure to <span class="deleteTxt">delete</span> <span class="productTxt"><?php echo e($obat->obat_name); ?></span> from your <span class="productTxt">list</span>?</h2>
            <div class="confirmBtn">
                <form action="/admin/delete-obat/<?php echo e($obat->id); ?>" method="post">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit">Yes</button>
                </form>
                <a href="/admin"><button>No</button></a>
            </div>
        </div>
    </div>
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\christian.wiranata\Desktop\Porject SE\resources\views/admin/delete-obat.blade.php ENDPATH**/ ?>