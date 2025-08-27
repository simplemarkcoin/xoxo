<?php $__env->startSection('title', 'Terms and Privacy And Policy'); ?>
<?php $__env->startSection('styles'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('styles'); ?>
<?php $__env->stopSection(); ?>
<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('content'); ?>
<!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-lg-12">
                    <div class="page-next-level">
                        <h4 class="title"> Terms and Privacy Policy </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="mb-0 bg-white rounded shadow breadcrumb">
                                    <li class="breadcrumb-item"><a href="/"><?php echo e($settings->site_name); ?></a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Privacy and policy</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Start Privacy -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="border-0 rounded shadow card">
                        <div class="card-body">
                            <?php echo $terms->description; ?>

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Privacy -->


    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views\home\privacy.blade.php ENDPATH**/ ?>