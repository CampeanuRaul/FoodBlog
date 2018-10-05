<?php $__env->startSection('title', '| View Post'); ?>

<?php $__env->startSection('hide-banner'); ?>
<?php echo e(Html::style('styles/hide.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1 class="desc" style="margin:20px 0;text-align: center;" ><?php echo e($post->title); ?></h1>
		<img class="single-img" src="<?php echo e(asset('images/'.$post->image)); ?>" alt="<?php echo e($post->title); ?>"  style="margin:0 auto;display:block;" >
		<p class="single" ><?php echo e($post->body); ?> </p>
	</div>
	
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>This post has <small><?php echo e($post->comments->count()); ?> comments</small></h2>
		<?php foreach($post->comments as $comment): ?>
		<div class="col-md-12 around">
		<p><b>From: </b><?php echo e($comment->name); ?></p>
		<p class="top" ><b>Message: </b> <?php echo e($comment->body); ?> </p>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<div class="row" style="margin:40px 0" >
	<div class="col-md-8 col-md-offset-2">
		<h1>Comment:</h1>
		<?php echo e(Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST'])); ?>

		<?php echo e(Form::label('name', 'Name:', ['class' => 'top'])); ?>

		<?php echo e(Form::text('name', null, ['class' => 'form-control'])); ?>

		<?php echo e(Form::label('email', null, ['class' => 'top'] )); ?>

		<?php echo e(Form::text('email', null, ['class' => 'form-control'])); ?>

		<?php echo e(Form::label('body', 'Comment:', ['class' => 'top'])); ?>

		<?php echo e(Form::textarea('body', null, ['class' => 'form-control', 'rows' => '6'])); ?>

		<?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary top'])); ?>

		<?php echo e(Form::close()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>