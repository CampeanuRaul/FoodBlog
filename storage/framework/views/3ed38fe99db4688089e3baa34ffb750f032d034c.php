<?php $__env->startSection('title', '| Edit Comment'); ?>

<?php $__env->startSection('hide-banner'); ?>
<?php echo e(Html::style('styles/hide.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<?php echo e(Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT'])); ?>

		<?php echo e(Form::label('name', 'Name:', ['class' => 'top'])); ?>

		<?php echo e(Form::text('name', null, ['class' => 'form-control', 'disabled'])); ?>

		<?php echo e(Form::label('email', 'Email:', ['class' => 'top'])); ?>

		<?php echo e(Form::text('email', null, ['class' => 'form-control', 'disabled'])); ?>

		<?php echo e(Form::label('body', 'Comment:', ['class' => 'top'])); ?>

		<?php echo e(Form::textarea('body', null, ['class' => 'form-control', 'rows' => '6'])); ?>

		<?php echo e(Form::submit('Update', ['class' => 'btn btn-primary top'])); ?>

		<?php echo e(Form::close()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>