<?php $__env->startSection('container'); ?>
<div class="add-obat-form">
  <form action="/admin/add-obat" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="add-obat-form-bar">
      <input type="text" name="obat_name" placeholder="Medicine Name..." autofocus value="<?php echo e(old('obat_name')); ?>">
      <?php $__errorArgs = ['obat_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-msg"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="add-obat-form-bar">
      <input type="text" name="obat_price" placeholder="Medicine Price..." value="<?php echo e(old('obat_price')); ?>">
      <?php $__errorArgs = ['obat_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-msg"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="add-obat-form-bar">
      <input type="text" name="obat_ingredients" placeholder="Medicine Ingredients..." value="<?php echo e(old('obat_ingredients')); ?>">
      <?php $__errorArgs = ['obat_ingredients'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-msg"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="add-obat-form-bar">
      <input type="text" name="obat_description" placeholder="Medicine Description..." value="<?php echo e(old('obat_description')); ?>">
      <?php $__errorArgs = ['obat_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-msg"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="add-obat-form-bar">
      <select name="category_id" required>
        <option value="" disabled selected>Medicine Categories...</option>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if(old('category_id') == $category->id): ?>
            <option value="<?php echo e($category->id); ?>" selected><?php echo e($category->category_name); ?></option>
          <?php else: ?>
            <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-msg"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="add-obat-form-bar">
      <label for="obat_photo">Upload Medicine Photo </label><br>
      <input type="file" name="obat_photo" id="obat_photo">
      <?php $__errorArgs = ['obat_photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-msg"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="add-btn">
      <button type="submit">ADD</button>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\christian.wiranata\Desktop\Porject SE\resources\views/admin/add-obat.blade.php ENDPATH**/ ?>