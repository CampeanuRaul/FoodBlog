<div class="categories">
	<ul>
		<li><a href="<?php echo e(route('category.all')); ?>">All Posts</a></li>
		<?php foreach($categories as $category): ?>
		<li><a href="<?php echo e(route('category.show', $category->id)); ?>"><?php echo e($category->name); ?></a></li>
		<?php endforeach; ?>
	</ul>
	<a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary" >Create Post</a>
</div>