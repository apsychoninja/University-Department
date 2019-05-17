<!-- Header ___________________ -->
<header class=" {{ (\Request::is('about')) ? "inner-header" : "main-header" }}">
	<div class="top-header">
		<div class="container">
			<div class="left-side float-left">
				<ul>
					<li><span class="icon round-border"><i class="fas fa-map-marker-alt coloricons"></i></span><a href="" class="trans3s">45/12 Best Avenue Street,  UK 2450, US</a></li>
					<li><span class="icon round-border"><i class="far fa-envelope coloricons"></i></span><a href="" class="trans3s">info@edutech.com</a></li>
					<li><span class="icon round-border"><i class="fas fa-phone-volume gly-rotate-45 coloricons"></i></span><a href="" class="trans3">+8801712570051</a></li>
					<li><span class="icon round-border"><i class="fas fa-globe coloricons"></i></span>
						<select class="selectpicker">
							<option value="English">English</option>
							<option value="Spanish">Spanish</option>
							<option value="L'italiano">L'italiano</option>
						</select>
					</li>
				</ul>
			</div><!-- /.left-side -->
			<div class="right-side float-right">
				<ul>
					<li><a href="#" class="tran3s round-border icon"><i class="fab fa-facebook socialmediaicons" aria-hidden="true"></i></a></li>
					<li><a href="#" class="tran3s round-border icon"><i class="fab fa-twitter socialmediaicons" aria-hidden="true"></i></a></li>
					
				</ul>
			</div> <!-- /.right-side -->
		</div>
	</div> <!-- /.top-header -->
	<!-- __________________________ Theme Menu __________________________ -->
	<div class="container">
		<div class="main-menu-wrapper clear-fix">
			<div class="container">
				<div class="logo float-left"><a href="{{ route('index') }}" style="vertical-arlign:middle;"><img src="{{ asset('images/logo/logo.png') }}" alt="{{ config('app.name') }}"></a></div>
				<form action="#" class="float-right">
					<input type="text" placeholder="Search">
					<button><i class="fa fa-search-minus" aria-hidden="true"></i></button>
				</form>
				<!-- Menu -->
				<nav class="navbar float-right">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="current-page-item"><a href="{{ route('index') }}">Home</a></li>
							<li class=""><a href="{{ route('about') }}">About</a></li>
							<li class="dropdown-holder"><a href="#">Events</a>
								<ul class="sub-menu">
									<li><a href="#" class="tran3s">Recent Events</a></li>
									<li><a href="#" class="tran3s">Upcoming Events</a></li>
								</ul>
							</li>
							<li class="dropdown-holder"><a href="#">Courses</a>
								<ul class="sub-menu">
									<li><a href="#" class="tran3s">Courses Offered</a></li>
									<li><a href="#" class="tran3s">Online Courses</a></li>
								</ul>
							</li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div> <!-- /.navbar-collapse -->
				</nav>
			</div>
		</div><!-- /.main-menu-wrapper -->
	</div>
</header>