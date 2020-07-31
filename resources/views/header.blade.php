<!-- header starts here -->
<header class="site-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="upper-header-wrap">
					<a href="javascript:void(0);" class="site-logo-wrap"><img src="{{ asset('/home-assets/images/site-logo.png')}}" class="site-logo"></a>
					<div class="sign-in-wrap">
						<a href="javascript:void(0);" class="tel-contact">0333 444 0331</a>
						@if (Auth::user())
						<a class="sign-in-btn" href="{{ route('logout') }}"
						onclick="event.preventDefault();
									  document.getElementById('logout-form').submit();">
						 {{ __('Logout') }}<span class="arrow-img"><img src="{{ asset('/home-assets/images/arrow.png')}}">
					 </a>

					 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						 @csrf
					 </form>
						@else
						<a href="{{url('/login')}}" class="sign-in-btn">sign in <span class="arrow-img"><img src="{{ asset('/home-assets/images/arrow.png')}}"></span></a>	
						@endif
					
					</div>
				</div>
				<div class="lower-header-wrap">
					<nav class="navbar navbar-expand-lg">

					  <!-- Toggler/collapsibe Button -->
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
					  </button>

					  <!-- Navbar links -->
					  <div class="collapse navbar-collapse" id="collapsibleNavbar">
					    <ul class="navbar-nav">
					      <li class="nav-item">
					      	<p class="navlink-heading">services</p>
					        <a class="nav-link" href="javascript:void(0);">
					        	<ul class="navlinks-inner-links-list">
					        		<li class="navlinks-inner-links">electrical</li>
					        		<li class="navlinks-inner-links">security</li>
					        		<li class="navlinks-inner-links">OLEV charging</li>
					        		<li class="navlinks-inner-links">solar</li>
					        	</ul>
					        </a>
					      </li>
					      <li class="nav-item">
					      	<p class="navlink-heading">utilities</p>
					        <a class="nav-link" href="javascript:void(0);">
					        	<ul class="navlinks-inner-links-list">
					        		<li class="navlinks-inner-links">energy</li>
					        		<li class="navlinks-inner-links">power care</li>
					        	</ul>
					        </a>
					      </li>
					      <li class="nav-item">
					      	<p class="navlink-heading">help center</p>
					        <a class="nav-link" href="javascript:void(0);">
					        	<ul class="navlinks-inner-links-list">
					        		<li class="navlinks-inner-links">help</li>
					        		<li class="navlinks-inner-links">blog</li>
					        	</ul>
					        </a>
					      </li>
					    </ul>
					  </div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- header ends here -->