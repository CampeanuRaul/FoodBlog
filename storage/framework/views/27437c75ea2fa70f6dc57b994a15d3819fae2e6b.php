
<?php /* Check for success messages */ ?>
<?php if(Session::has('success')): ?>
<div class="alert alert-success" role="alert">
	<strong>Success:</strong> <?php echo e(Session::get('success')); ?>

</div>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
<div class="alert alert-danger" role="alert" >
	<strong>Errors:</strong>
	<ul>
		<?php foreach($errors->all() as $error): ?>
			<li><?php echo e($error); ?></li>
		<?php endforeach; ?>
	</ul>
</div>

<?php endif; ?>

<?php if(Session::has('failed')): ?>
<div class="alert alert-danger" role="alert" >
	<strong>Errors:</strong>
	<p>The old password you typed is incorect</p>
</div>




<?php endif; ?>