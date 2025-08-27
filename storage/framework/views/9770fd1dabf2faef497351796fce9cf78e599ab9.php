<turbo-stream <?php echo e($attributes->merge(array_merge($targetTag ?? false ? [$targetTag => $targetValue] : [], ["action" => $action], $mergeAttrs))); ?>>
<?php if(($slot?->isNotEmpty() ?? false) && $action !== "remove"): ?>
    <template><?php echo e($slot); ?></template>
<?php endif; ?>
</turbo-stream>
<?php /**PATH C:\xampp\htdocs\app\vendor\tonysm\turbo-laravel\resources\views\components\stream.blade.php ENDPATH**/ ?>