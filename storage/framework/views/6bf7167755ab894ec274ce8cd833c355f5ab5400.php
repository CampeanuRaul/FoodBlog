		

	<div class="header">
			<div class="toggle-menu">
				<i class="fas fa-bars toggle"></i>
				<i class="fas fa-times times "></i>
			</div>
			<nav>
				<ul>
					<li class="<?php echo $__env->yieldContent('home'); ?>" ><a href="/">home</a></li>
					<li class="<?php echo $__env->yieldContent('blog'); ?>"  ><a href="<?php echo e(route('category.all')); ?>">blog</a></li>
					<li class="<?php echo $__env->yieldContent('about'); ?>" style="border-bottom:none;" ><a href="<?php echo e(url('/about')); ?>">about</a></li>
				</ul>
			</nav>
			<div class="logo"><h1>salt & pepper</h1></div>
			<div class="auth-btn" <?php echo e(Auth::check()? '' : 'style=top:43px;'); ?> >
				<?php if(Auth::check()): ?>
				
					<img src=" <?php echo e(asset('images/'. Auth::user()->image)); ?>" >
					<a  class="btn btn-default no-border">Welcome <?php echo e(Auth::user()->name); ?> <i class="fas fa-chevron-down"></i></a>
				
					<ul class="login-desc" >
						<li><a href="<?php echo e(route('users.index')); ?>">Profile</a> </li>
						<li><a href="<?php echo e(route('posts.index')); ?>">Posts</a> </li>
						<li class="br" ></li>
						<li><a href="<?php echo e(url('/logout')); ?>">Logout</a></li>
					</ul>
				<?php else: ?>
				<a class="btn btn-primary" href="<?php echo e(url('/login')); ?>"  >Login</a>
				<a class="btn btn-info" href="<?php echo e(url('/register')); ?>" >Register</a>
				<?php endif; ?>
			</div>
		</div>
		<?php /* End of the header */ ?>
		<div class="blog-banner"></div>
		<?php /* End of the banner */ ?>