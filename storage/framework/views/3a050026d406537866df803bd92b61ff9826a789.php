<?php $__env->startSection('container'); ?>
    <?php echo $__env->make('components.user-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="notif-main-container">
        <div class="notif-top-container">
            <img src="<?php echo e(asset('assets/Icon/transaction.png')); ?>" alt="Gambar Transaksi" width="88px" height="78px">
            <div class="notif-transaction-text">Transaction</div>
        </div>
        <div class="notif-inner-container">
            <?php $__currentLoopData = $ongoingTransactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ongoingTransaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="display-transaction-container">
                    <div class="left-transaction-container">
                        <img src="<?php echo e(Storage::url($ongoingTransaction->obat->obat_photo)); ?>" alt="Gambar Kue" width="210px" height="205px">
                        <div class="transaction-detail-container">
                            <h1 class="notif-main-text"><?php echo e($ongoingTransaction->obat->obat_name); ?></h1>
                            <?php if($ongoingTransaction->transactionHeader->status->status_name === 'Ongoing'): ?>
                                <h2 class="notif-sub-text" id="ongoing"><?php echo e($ongoingTransaction->transactionHeader->status->status_name); ?></h2>
                            <?php elseif($ongoingTransaction->transactionHeader->status->status_name === 'Delivered'): ?>
                                <h2 class="notif-sub-text" id="delivered"><?php echo e($ongoingTransaction->transactionHeader->status->status_name); ?></h2>
                            <?php endif; ?>
                            <h4 class="notif-date"><?php echo e(date('d M Y', strtotime($ongoingTransaction->transactionHeader->transaction_date))); ?></h4>
                            <a href="/user/transaction/transaction-detail/<?php echo e($ongoingTransaction->transactionHeader->id); ?>" class="see-details">See Details</a>
                        </div>
                        <?php if($ongoingTransaction->transactionHeader->status->status_name === 'Delivered'): ?>
                            <div>
                                <form action="/user/transaction" method="post">
                                    <?php echo method_field('put'); ?>
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="transactionId" value="<?php echo e($ongoingTransaction->transactionHeader->id); ?>">
                                    <button type="submit" class="confirm-order-btn">Confirm Order</button>
                                </form>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="customer-history">History</div>
        <?php if(count($succeedTransactions) === 0): ?>
            <div class="cart">
                <img src="<?php echo e(asset('assets/Icon/cart.jpg')); ?>" alt="Gambar Cart" width="335px" height="289px">
                <div class="belanja-text">There is no transaction</div>
                <div class="belanja-text">Let's Shop!</div>
                <div class="start">
                    <a href="/user"><button class="start-btn">Let's Start <img src="<?php echo e(asset('assets/telegram.png')); ?>" alt="" width="33px" height="33px"></button></a>
                </div>
            </div>
        <?php else: ?>
            <div class="notif-inner-container">
                <?php $__currentLoopData = $succeedTransactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $succeedTransaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="display-transaction-container">
                        <div class="left-transaction-container">
                            <img src="<?php echo e(Storage::url($succeedTransaction->obat->obat_photo)); ?>" alt="Gambar Kue" width="210px" height="205px">
                            <div class="transaction-detail-container">
                                <div class="notif-main-text"><?php echo e($succeedTransaction->obat->obat_name); ?></div>
                                <div class="notif-sub-text" id="finished"><?php echo e($succeedTransaction->transactionHeader->status->status_name); ?></div>
                                <div class="notif-date"><?php echo e(date('d M Y', strtotime($succeedTransaction->transactionHeader->transaction_date))); ?></div>
                                <a href="/user/transaction/transaction-detail/<?php echo e($succeedTransaction->transactionHeader->id); ?>" class="see-details">See Details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuliah\Software Engineering\Project\Sehatin\resources\views/user/transaction.blade.php ENDPATH**/ ?>