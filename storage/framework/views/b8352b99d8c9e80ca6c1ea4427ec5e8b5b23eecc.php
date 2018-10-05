<!DOCTYPE html>
<html>
<head>
	<?php echo $__env->make('partials/_head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
	<div class="wrapper">
		<?php echo $__env->make('partials/_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<?php echo $__env->make('partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="content">
			<?php echo $__env->yieldContent('content'); ?>
		</div>

		<div class="footer">
		<?php echo $__env->make('partials/_footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>
</body>
</html>