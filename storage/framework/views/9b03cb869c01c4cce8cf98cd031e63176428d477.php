<?php if (isset($component)) { $__componentOriginal98fde63d044919ab39dd3543763ccbabf4a84c1b = $component; } ?>
<?php $component = $__env->getContainer()->make(Tonysm\TurboLaravel\Views\Components\Stream::class, ['target' => $target ?? null,'action' => $action,'targets' => $targets ?? null,'mergeAttrs' => $attrs ?? []]); ?>
<?php $component->withName('turbo-stream'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if($partial ?? false): ?>
    <?php echo $__env->make($partial, $partialData, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($content ?? false): ?>
    <?php echo e($content); ?>

<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal98fde63d044919ab39dd3543763ccbabf4a84c1b)): ?>
<?php $component = $__componentOriginal98fde63d044919ab39dd3543763ccbabf4a84c1b; ?>
<?php unset($__componentOriginal98fde63d044919ab39dd3543763ccbabf4a84c1b); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\app\vendor\tonysm\turbo-laravel\resources\views\turbo-stream.blade.php ENDPATH**/ ?>