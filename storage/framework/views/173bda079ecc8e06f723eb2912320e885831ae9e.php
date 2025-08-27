<?php $__env->startSection('title', 'Authenticate account'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row align-items-center justify-content-around vh-100" x-data="{ recovery: false }">
        <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 py-6">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <!-- Title -->
            <h1 class="text-center mb-2">2-step verification</h1>
            <!-- Heading -->
            <p class="text-secondary text-center" x-show="! recovery">
                <?php echo e(__('Please confirm access to your account by entering the authentication code provided by your authenticator application.')); ?>

            </p>
            <p class="text-secondary text-center" x-show="recovery">
                <?php echo e(__('Please confirm access to your account by entering one of your emergency recovery codes.')); ?>

            </p>
            <form method="POST" action="<?php echo e(route('two-factor.login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-lg-12" x-show="! recovery">
                        <div class="mb-5">
                            <label class="form-label">
                                Code
                            </label>
                            <!-- Input -->
                            <input type="text" inputmode="numeric" class="form-control"
                                placeholder="Enter auth code from your app" name="code" autofocus x-ref="code"
                                autocomplete="one-time-code">
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12" x-show="recovery">
                        <div class="mb-5">
                            <label class="form-label">
                                <?php echo e(__('Recovery Code')); ?>

                            </label>
                            <input id="recovery_code" class="form-control" type="text" name="recovery_code"
                                x-ref="recovery_code" autocomplete="one-time-code">
                        </div>
                    </div>
                    <!--end col-->

                    <div class="my-2 col-lg-12 text-center">
                        <button class="btn btn-link" type="button" x-show="! recovery"
                            x-on:click="
                                    recovery = true;
                                    $nextTick(() => { $refs.recovery_code.focus() })
                                ">
                            <?php echo e(__('Use a recovery code')); ?>

                        </button>
                    </div>

                    <div class="my-2 col-lg-12 text-center">
                        <button class="btn btn-link" type="button" x-show="recovery"
                            x-on:click="
                                    recovery = false;
                                    $nextTick(() => { $refs.code.focus() })
                                ">
                            <?php echo e(__('Use an authentication code')); ?>

                        </button>
                    </div>
                </div>
                <div class="row align-items-center text-center">
                    <div class="col-12">
                        <!-- Button -->
                        <button type="submit" class="btn w-100 btn-primary mt-3 mb-2">Verify & sign in</button>
                    </div>
                </div> <!-- / .row -->
                <!--end row-->
            </form>

        </div>
    </div> <!-- / .row -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.guest1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views\auth\two-factor-challenge.blade.php ENDPATH**/ ?>