<?php $__env->startSection('title', __('Unauthorized')); ?>
<?php $__env->startSection('code', '401'); ?>
<?php $__env->startSection('message', __('You are unauthorized to perform this action')); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views\errors\401.blade.php ENDPATH**/ ?>