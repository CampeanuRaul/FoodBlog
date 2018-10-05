<?php $__env->startSection('title', '| Delete comment'); ?>

<?php $__env->startSection('hide-banner'); ?>
<?php echo e(Html::style('styles/hide.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="row" style="margin:50px 0 70px" >
	<div class="col-md-8 col-md-offset-2">
		<h2 style="text-align:center;" >You sure want to delete this comment?</h2>
		<?php echo e(Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE' ])); ?>

		<?php echo e(Form::submit('Yes, I\'m sure', ['class' => 'btn btn-danger btn-block top'])); ?>

		<?php echo e(Form::close()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>