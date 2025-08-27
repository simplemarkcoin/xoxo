<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.trading-payment', [])->html();
} elseif ($_instance->childHasBeenRendered('3CjWRHb')) {
    $componentId = $_instance->getRenderedChildComponentId('3CjWRHb');
    $componentTag = $_instance->getRenderedChildComponentTagName('3CjWRHb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3CjWRHb');
} else {
    $response = \Livewire\Livewire::mount('admin.trading-payment', []);
    $html = $response->html();
    $_instance->logRenderedChild('3CjWRHb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views\admin\subscription\payment.blade.php ENDPATH**/ ?>