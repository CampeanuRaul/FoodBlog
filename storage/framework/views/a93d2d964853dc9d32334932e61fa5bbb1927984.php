<?php $__env->startSection('title', '| User profile'); ?>

<?php $__env->startSection('hide-banner'); ?>
<?php echo e(Html::style('styles/hide.css')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row" style="margin:30px 0 50px">
	<div class="col-md-8 col-md-offset-2">
		<h2 ">Hello <?php echo e(Auth::user()->name); ?>, below you can see your profile info </h2>
		<div class="col-md-12 prof">
				<p><b>Profile image:</b></p><img  src="<?php echo e(asset('images/'. Auth::user()->image)); ?>">
		</div>
		<table class="table" >
			<tbody>

				<tr>
					<th>Join date:</th>
					<td><?php echo e(Auth::user()->created_at); ?></td>
				</tr>
				<tr>
					<th>Last time the account was updated:</th>
					<td><?php echo e(Auth::user()->updated_at); ?> </td>
				</tr>
				<tr>
					<th>Email:</th>
					<td><?php echo e(Auth::user()->email); ?> </td>
				</tr>
				<tr>
					<th style="vertical-align: middle;" >Change password:</th>
					<td>
						<?php echo e(Form::open(['route' => ['users.password'], 'method' => 'PUT'])); ?>

						<?php echo e(Form::label('old_pass', 'Old password:')); ?>

						<?php echo e(Form::password('old_pass',  ['class' => 'form-control'])); ?>

						<?php echo e(Form::label('new_pass', 'New password:', ['class' => 'top'])); ?>

						<?php echo e(Form::password('new_pass', ['class' => 'form-control'])); ?>

						<?php echo e(Form::submit('Change password', ['class' => 'btn btn-primary top btn-block'])); ?>

						<?php echo e(Form::close()); ?>

					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
	<div class="row buttons">
		<div class="col-md-2 col-md-offset-4"  >
			<a href="<?php echo e(route('users.edit', Auth::user()->id )); ?>" class="btn btn-info btn-block">Edit account</a>
		</div>
		<div class="col-md-2" >
			<a href="<?php echo e(route('users.del', Auth::user()->id)); ?>" class="btn btn-danger btn-block">Delete account</a>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>