<?php $__env->startSection('container'); ?>
    <?php echo $__env->make('components.user-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-container">
        <div class="product-information-container">
            <div class="img-and-share">
                <img src="<?php echo e(Storage::url($obat->obat_photo)); ?>" alt="Gambar Kue" width="534px" height="428.67px" class="img-kue">
            </div>
                
            <div>
                <div class="brand-title"><b><?php echo e($obat->obat_name); ?></b></div>
                <div class="harga">Rp.<?php echo e($obat->obat_price); ?></div>
                <div class="detail-container">
                    <div class="detail-lists">
                        <div class="list-pengiriman">Shipping Address</div>
                        <div>Payment Method</div>
                        <div>Quantity</div>
                        <?php if($favorite != null && $favorite->user_id == auth()->user()->id): ?>
                            <form action="/user/product-detail/<?php echo e($obat->id); ?>" method="post">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="added-fav-button">
                                    <img src="<?php echo e(asset('assets/Transaction/added-favorite.png')); ?>" alt="Gambar Hati" width="28px" height="28px">
                                    <div class="fav-text" id="addedFavorite">Favorite</div>
                                </button>
                            </form>
                        <?php else: ?>
                            <form action="/user/product-detail/<?php echo e($obat->id); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="action" value="favorite">
                                <button type="submit" class="fav-button">
                                    <img src="<?php echo e(asset('assets/Transaction/add-favorite-default.png')); ?>" alt="Gambar Hati" width="28px" height="28px">
                                    <div class="fav-text">Favorite</div>
                                </button>
                            </form>
                        <?php endif; ?>
                    </div>

                    <div class="detail-isi">
                        <div class="alamat-pengiriman"><?php echo e(auth()->user()->address); ?></div>
                        <div>Transfer</div>
                        <form action="/user/product-detail/<?php echo e($obat->id); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="action" value="order">
                            <div class="quantity">
                                <input type="number" id="quantity" name="quantity" min="1" required>
                            </div>
                            <button type="submit" class="buy-button">Order Now</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>

        <div class="deskripsi-produk">
            <div>Ingredients: </div>
            <div class="deskripsi-bahan"><?php echo e($obat->obat_ingredients); ?></div>
            <div class="teks-deskripsi">Description: </div>
            <div class="paragraf-deskripsi"><?php echo e($obat->obat_description); ?></div>
        </div>
    </div>
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuliah\Software Engineering\Project\Sehatin\resources\views/user/product-detail.blade.php ENDPATH**/ ?>