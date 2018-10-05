			

			<div class="form-description">
				<h2>Subscribe via email</h2>
				<div class="bl"></div>
			</div>
			<div class="form">
				<form action="<?php echo e(route('post.news')); ?>" method="POST" >
					<?php echo e(csrf_field()); ?>

					<input type="text" name="email" placeholder="Email Address" class="form-control">
					<button class="btn btn-primary black btn-block" type="submit" name="submit">Subscribe now</button>
				</form>
				<div class="social">
					<ul>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="footer-copyright"><p>© 2018 by Campeanu Raul. Proudly created with Laravel</p></div>