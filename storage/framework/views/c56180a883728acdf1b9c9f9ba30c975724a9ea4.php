<?php $__env->startSection('title', '| Edit pofile'); ?>

<?php $__env->startSection('hide-banner'); ?>
<?php echo e(Html::style('styles/hide.css')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row" style="margin:30px 0 50px" >
	<div class="col-md-8 col-md-offset-2">
		<?php echo e(Form::model($user,['route' => ['users.update', $user->id], 'method' => 'PUT', 'files' => 'true'])); ?>

		<?php echo e(Form::label('name', 'Name:', ['class' => 'top'])); ?>

		<?php echo e(Form::text('name', null, ['class' => 'form-control'])); ?>

		<?php echo e(Form::label('email', 'Email:', ['class' => 'top'])); ?>

		<?php echo e(Form::text('email', null, ['class' => 'form-control'])); ?>

		<?php echo e(Form::label('image','Image:', ['class' => 'top'])); ?>

		<?php echo e(Form::file('image')); ?>

		<?php echo e(Form::submit('Update', [ 'class' => 'btn btn-primary top btn-block'])); ?>

		<?php echo e(Form::close()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>