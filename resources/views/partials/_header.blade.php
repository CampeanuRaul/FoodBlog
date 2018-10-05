		

	<div class="header">
			<div class="toggle-menu">
				<i class="fas fa-bars toggle"></i>
				<i class="fas fa-times times "></i>
			</div>
			<nav>
				<ul>
					<li class="@yield('home')" ><a href="/">home</a></li>
					<li class="@yield('blog')"  ><a href="{{ route('category.all') }}">blog</a></li>
					<li class="@yield('about')" style="border-bottom:none;" ><a href="{{ url('/about')}}">about</a></li>
				</ul>
			</nav>
			<div class="logo"><h1>salt & pepper</h1></div>
			<div class="auth-btn" {{ Auth::check()? '' : 'style=top:43px;' }} >
				@if(Auth::check())
				
					<img src=" {{ asset('images/'. Auth::user()->image) }}" >
					<a  class="btn btn-default no-border">Welcome {{Auth::user()->name}} <i class="fas fa-chevron-down"></i></a>
				
					<ul class="login-desc" >
						<li><a href="{{ route('users.index') }}">Profile</a> </li>
						<li><a href="{{ route('posts.index') }}">Posts</a> </li>
						<li class="br" ></li>
						<li><a href="{{ url('/logout') }}">Logout</a></li>
					</ul>
				@else
				<a class="btn btn-primary" href="{{ url('/login') }}"  >Login</a>
				<a class="btn btn-info" href="{{ url('/register') }}" >Register</a>
				@endif
			</div>
		</div>
		{{-- End of the header --}}
		<div class="blog-banner"></div>
		{{-- End of the banner --}}