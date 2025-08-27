<?php $__env->startSection('title', 'Two factor authentication'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row align-items-center justify-content-center vh-100">
        <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 py-6">
            <?php if(Session::has('message')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo e(Session::get('message')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <!-- Title -->
            <h1 class="mb-2 text-center">
                Two factor authentication
            </h1>

            <!-- Subtitle -->
            <p class="text-secondary text-center">
                A 2FA authentication code has been sent to your email, kindly
                check your email and enter code below to continue.
            </p>

            <form method="POST" action="<?php echo e(route('twofalogin')); ?>">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-4">
                            <!-- Label -->
                            <label class="form-label">
                                Code
                            </label>
                            <input type="password" class="form-control" name="twofa"
                                placeholder="Enter the code you receive here" required>
                        </div>
                        <?php $__errorArgs = ['twofa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="fs-6 text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div> <!-- / .row -->

                <div class="row align-items-center text-center">
                    <div class="col-12">
                        <!-- Button -->
                        <button type="submit" class="btn w-100 btn-primary mt-3 mb-2">Sign in</button>
                    </div>
                    <div class="col-12">
                        <!-- Link -->
                        <small class="mb-0 text-muted">Back to
                            <a href="<?php echo e(route('adminlogout')); ?>"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                class="">
                                Sign in
                            </a>
                    </div>
                </div> <!-- / .row -->
            </form>
            <form id="logout-form" action="<?php echo e(route('adminlogout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

            </form>
        </div>
    </div> <!-- / .row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views\auth\two_factor.blade.php ENDPATH**/ ?>