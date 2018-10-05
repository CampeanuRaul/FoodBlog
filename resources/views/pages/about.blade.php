@extends('main')

@section('title', '| About page')

@section('about_css')
<link type="text/css" rel="stylesheet" href="styles/about.css">
@endsection

@section('about', 'act')


@section('content')
<div class="about-me">
	<div class="form-description">
		<h2>About me</h2>
		<div class="bl"></div>
	</div>
	<div class="img-description">
		<h3><b>Sofie H.</b> <br>Blogger, journalist, <br>Taste-maker</h3>
		<img class="blogger" src="images/bloger.png" alt="Blogger">
	</div>
	<p class="img-text" >Vivamus diam erat, viverra vel ultricies ut, mollis sed magna. Curabitur vitae nibh ultrices, sagittis est vel odio. Vestibulum ante ipsum luctus et ultrices posuere cubilia Curae; Maecenas nec tincidunt diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae pharetra diam, eleifend viverra augue. Vivamus ut orci ut quam venenatis. Fusce commodo, dui non ultricies ullamcorper, risus ante velit, in commodo lacus libero sed tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
</div>

<div class="contact-form">
	<div class="form-description">
		<h2>Contact me</h2>
		<div class="bl"></div>
	</div>
  <div class="half">
	<div class="form-info" >
		<p>mosoiu888@gmail.com</p>
		<p>0755878798</p>
		<div class="social">
			<ul>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
 </div>
	<div class="form">
		<form action="{{ route('post.about') }}" method="POST">
			{{ csrf_field() }}
			<input type="text" name="email" placeholder="Email"class="form-control" >
			<input type="text" name="subject" placeholder="Subject"class="form-control" >
			<textarea rows="7" placeholder="Message" class="form-control"  name="message" ></textarea>
			<button type="submit" name="submit" class="btn btn-primary " >Send</button>
		</form>
	</div>
</div>
<div class="clear"></div>
@endsection