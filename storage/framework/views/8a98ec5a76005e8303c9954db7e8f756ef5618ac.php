<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="login-box">LOGIN</div>
        <div class="inside-container">
            <?php if(session()->has('success')): ?>
                <div class="success-msg">
                    <h3><?php echo e(session('success')); ?></h3>
                    <button type="button" id="dismiss-btn">&#10005;</button>
                </div>
            <?php elseif(session()->has('loginError')): ?>
                <div class="error-msg">
                    <h3><?php echo e(session('loginError')); ?></h3>
                    <button type="button" id="dismiss-btn">&#10005;</button>
                </div>
            <?php endif; ?>
            <form action="/login" method="post">
                <?php echo csrf_field(); ?>
                <div class="box">
                    <div class="login-icon"><i class="fa fa-user-circle fa-lg" ></i></div>
                    <input class="text" type="email" name="email" placeholder="Email" autofocus value="<?php echo e(old('email')); ?>">
                </div>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-msg"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="box">
                    <div class="login-icon"><i class="fa fa-key fa-lg" ></i></div>
                    <input class="text" type="password" name="password" placeholder="Password">
                </div>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-msg"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="remember-forget">
                    <div class="remember-box">
                        <input type="hidden" id="remember" name="remember" value="remember">
                        <label for="remember" class="remember-text"></label>
                    </div>
                    <a href="/login/forgot-password" class="forget-password">Forgot Password?</a>
                </div>
                
                <div class="box"><button type="submit" class="button-login">LOGIN</button></div>
            </form>
            <div style="height: 10px"></div>
            <div class="box"><a href="/register" class="button-register">REGISTER</a></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuliah\Software Engineering\Project\Sehatin\resources\views/guest/login.blade.php ENDPATH**/ ?>