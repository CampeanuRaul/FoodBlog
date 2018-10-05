<?php $__env->startSection('title', '| Edit Post'); ?>

<?php $__env->startSection('hide-banner'); ?>
<?php echo Html::style('styles/hide.css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-md-8 col-md-offset-2" >
		<h1>Edit the post</h1>
		<?php echo e(Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => 'true', 'style' => 'margin-bottom:50px;'])); ?>

		<?php echo e(Form::label('title', 'Title:', ['class' => 'top'])); ?>

		<?php echo e(Form::text('title', null, ['class' => 'form-control'])); ?>

		<?php echo e(Form::label('image', 'Image:', ['class' => 'top'])); ?>

		<?php echo e(Form::file('image')); ?>

		<?php echo e(Form::label('body', 'Description:', ['class' => 'top'])); ?>

		<?php echo e(Form::textarea('body', null, ['class' => 'form-control'])); ?>

		<?php echo e(Form::submit('Update', ['class' => 'btn btn-success top btn-block'])); ?>

		<?php echo e(Form::close()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>