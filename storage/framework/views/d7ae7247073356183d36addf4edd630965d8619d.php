<?php $__env->startSection('title', '| View post'); ?>

<?php $__env->startSection('hide-banner'); ?>
<?php echo e(Html::style('styles/hide.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-12">
		<div style="text-align:center">
			<a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-info" style="display:inline-block"  >Edit</a>
			<?php echo e(Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE', 'style' => 'display:inline-block'])); ?>

			<?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger', ])); ?>

			<?php echo e(Form::close()); ?>

		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1 class="desc" style="margin:20px 0;text-align: center;" ><?php echo e($post->title); ?></h1>
		<img class="single-img" src="<?php echo e(asset('images/'.$post->image)); ?>" alt="<?php echo e($post->title); ?>"  style="margin:0 auto;display:block;" >
		<p class="single" ><?php echo e($post->body); ?> </p>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>Comments<small> <?php echo e($post->comments->count()); ?> total </small></h2>
		<table class="table" >
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Comment</th>
					<th></th>
				</tr>
			</thead>	
			<tbody>
				<?php foreach($post->comments as $comment): ?>
				<tr>
					<th><?php echo e($comment->id); ?></th>
					<td><?php echo e($comment->name); ?></td>
					<td><?php echo e($comment->body); ?></td>
					<td>
						<a href="<?php echo e(route('comments.edit', $comment->id)); ?>" class="btn btn-info btn-xs" >Edit</a>
						<a href="<?php echo e(route('comments.delete', $comment->id)); ?>" class="btn btn-danger btn-xs" >Delete</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>