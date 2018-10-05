<?php $__env->startSection('title', '| View All Posts'); ?>

<?php $__env->startSection('hide-banner'); ?>
<?php echo e(Html::style('styles/hide.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>All posts</h1>
		<table class="table" >
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Description</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($posts as $post): ?>
				<tr>
					<th><?php echo e($post->id); ?></th>
					<td><?php echo e($post->title); ?></td>
					<td><?php echo e(substr($post->body, 0, 50)); ?><?php echo e(strlen($post->body) < 50 ? '' : '...'); ?></td>

					<td>
						<a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn btn-default btn-xs" >Show</a>
						<a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-info btn-xs" >Edit</a>
					</td>
				</tr>

				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>