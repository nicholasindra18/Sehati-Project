<?php $__env->startSection('container'); ?>
    <?php echo $__env->make('components.admin-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-container">
        <div class="product-container">
            <img src="<?php echo e(Storage::url($obat->obat_photo)); ?>" alt="Gambar Kue" width="350px" height="350px" class="img-kue">
            <div class="nama-kue"><?php echo e($obat->obat_name); ?></div>
            <div class="harga-kue">Rp.<?php echo e($obat->obat_price); ?></div>
            <div class="category-container">
                <div class="teks-category">Category</div>
                <div class="category-kue"><?php echo e($obat->category->category_name); ?></div>
            </div>
        </div>

        <div class="deskripsi-produk">
            <div>Ingredients: </div>
            <div class="deskripsi-bahan"><?php echo e($obat->obat_ingredients); ?></div>
            <div class="teks-deskripsi">Description: </div>
            <div class="paragraf-deskripsi"><?php echo e($obat->obat_description); ?></div>
        </div>

        <a href="/admin/update-obat/<?php echo e($obat->id); ?>"><div class="edit-button">Edit</div></a>
    </div>
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuliah\Software Engineering\Project\Sehatin\resources\views/admin/edit-obat.blade.php ENDPATH**/ ?>