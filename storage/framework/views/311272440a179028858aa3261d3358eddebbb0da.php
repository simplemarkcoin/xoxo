<turbo-frame
    id="<?php echo e($domId); ?>"
    <?php if($loading): ?> loading="<?php echo e($loading); ?>" <?php endif; ?>
    <?php if($src): ?> src="<?php echo e($src); ?>" <?php endif; ?>
    <?php if($target): ?> target="<?php echo e($target); ?>" <?php endif; ?>
    <?php echo e($attributes); ?>

><?php echo e($slot); ?></turbo-frame>
<?php /**PATH C:\xampp\htdocs\app\vendor\tonysm\turbo-laravel\resources\views\components\frame.blade.php ENDPATH**/ ?>