<?php $__env->startSection('container'); ?>
  <?php echo $__env->make('components.admin-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="table">
    <table class="transaction-table">
      <thead>
        <tr>
          <th>Order Number</th>
          <th>Name</th>
          <th>Medicine Name</th>
          <th>Order Quantity</th>
          <th>Payment Time</th>
          <th>Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($transaction->transactionHeader->id); ?></td>
            <td><?php echo e($transaction->transactionHeader->user->fullname); ?></td>
            <td><?php echo e($transaction->obat->obat_name); ?></td>
            <td><?php echo e($transaction->quantity); ?></td>
            <td><?php echo e(date('d M Y', strtotime($transaction->transactionHeader->transaction_date))); ?></td>
            <?php if($transaction->transactionHeader->status->status_name === 'Ongoing'): ?>
              <td id="ongoing"><?php echo e($transaction->transactionHeader->status->status_name); ?></td>
            <?php elseif($transaction->transactionHeader->status->status_name === 'Delivered'): ?>
              <td id="delivered"><?php echo e($transaction->transactionHeader->status->status_name); ?></td>
            <?php else: ?>
              <td id="finished"><?php echo e($transaction->transactionHeader->status->status_name); ?></td>
            <?php endif; ?>
            <?php if($transaction->transactionHeader->status->status_name === 'Ongoing'): ?>
            <td>
              <form action="/admin" method="post">
                <?php echo method_field('put'); ?>
                <?php echo csrf_field(); ?>
                <input type="hidden" name="transactionId" value="<?php echo e($transaction->transactionHeader->id); ?>">
                <button type="submit">Update</button>
              </form>
            </td>
            <?php else: ?>
              <td><button style="display: none;">Update</button></td>
            <?php endif; ?>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    <?php if(count($transactions) === 0): ?>
      <h4 class="no-order-text">No Order Available</h4>
    <?php endif; ?>
  </div>
  <div class="add-obat">
    <h2>My Medicine:</h2>
    <a href="/admin/add-obat"><button>+ Add Medicine</button></a>
  </div>
  <div class="add-obat-products">
    <div class="all-products-container">
      <?php $__currentLoopData = $obats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="single-product-container">
            <a href="/admin/edit-obat/<?php echo e($obat->id); ?>"><img src="<?php echo e(Storage::url($obat->obat_photo)); ?>" alt="gambar kue" width="307px" height="257px" class="img-single-obat"></a>
            <div class="single-product-name"><?php echo e($obat->obat_name); ?></div>
            <div class="single-product-desc"><?php echo e($obat->excerpt); ?></div>
            <a href="/admin/delete-obat/<?php echo e($obat->id); ?>" class="delete-product"><img src="<?php echo e(asset('assets/Icon/Delete.png')); ?>" alt="Delete obat" width="18px" height="18px"></a>
          </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuliah\Software Engineering\Project\Sehatin\resources\views/admin/home.blade.php ENDPATH**/ ?>