<?php $__env->startSection('blog', 'act'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('../partials/__blogNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>