<?php $__env->startSection('title', '| User profile'); ?>

<?php $__env->startSection('hide-banner'); ?>
<?php echo e(Html::style('styles/hide.css')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row" style="margin:50px 0 70px" >
	<div class="col-md-8 col-md-offset-2">
		<h2>Change password</h2>
		<?php echo e(Form::open(['route' => ['users.password'], 'method' => 'PUT'])); ?>

		<?php echo e(Form::label('old_pass', 'Old password:', ['class' => 'top'])); ?>

		<?php echo e(Form::text('old_pass', null, ['class' => 'form-control'])); ?>

		<?php echo e(Form::label('new_pass', 'New password:', ['class' => 'top'])); ?>

		<?php echo e(Form::text('new_pass', null, ['class' => 'form-control'])); ?>

		<?php echo e(Form::submit('Change password', ['class' => 'btn btn-primary top'])); ?>

		<?php echo e(Form::close()); ?>

	</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>