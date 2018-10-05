<?php $__env->startSection('title', '| View Category'); ?>

<?php $__env->startSection('blog', 'act'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('../partials/__blogNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="content-boxes">
<?php foreach($posts->all() as $post): ?>
<div class="box">
	<img src="<?php echo e(asset('images/'. $post->image)); ?>" alt="<?php echo e($post->title); ?>" >
		<div class="user-info">
		<img src="<?php echo e(asset('images/'. $post->user->image)); ?>"  alt="user profile"  >
		<div class="user-para">
			<p class="user-name"><?php echo e($post->user->name); ?></p>
			<p class="date" ><b>Date:</b> <?php echo e(date('M j, Y H:i', strtotime($post->created_at))); ?></p>
		</div>
	</div>
	<h2><?php echo e($post->title); ?></h2>
	<p class="food-desc" ><?php echo e(substr($post->body, 0, 150)); ?><?php echo e(strlen($post->body) < 150 ? '' : '...'); ?></p>
	<a href="<?php echo e(route('single', $post->id)); ?>" class="btn btn-info" >Read more</a>
</div>
<?php endforeach; ?>
</div>
<div style="text-align:center;">
	<?php echo e($posts->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>