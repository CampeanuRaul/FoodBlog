<?php $__env->startSection('title', '| Create Post'); ?>

<?php $__env->startSection('hide-banner'); ?>
<?php echo e(Html::style('styles/hide.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row" style="margin-bottom:50px" >
	<div class="col-md-8 col-md-offset-2">
		<h1 class="top">Create New Post</h1>
		<hr>
		<?php echo e(Form::open(['route' => ['posts.store'] , 'method' => 'POST', 'files' => 'true'])); ?>

		<?php echo e(Form::label('title', 'Title:')); ?>

		<?php echo e(Form::text('title', null, ['class' => 'form-control'])); ?>

		<?php echo e(Form::label('category_id', 'Category:', ['class' => 'top'])); ?>

		<select name="category_id" class="form-control" >
			<?php foreach($categories as $category): ?>
				<option value="<?php echo e($category->id); ?>" ><?php echo e($category->name); ?></option>
			<?php endforeach; ?>
		</select>
		<?php echo e(Form::label('image', 'Image:', ['class' => 'top'])); ?>

		<?php echo e(Form::file('image')); ?>

		<?php echo e(Form::label('body', 'Description:', ['class' => 'top'])); ?>

		<?php echo e(Form::textarea('body', null, ['class' => 'form-control'])); ?>

		<?php echo e(Form::submit('Create Post', ['class' => 'btn btn-success top btn-block black'])); ?>


		<?php echo e(Form::close()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>