<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						@if(\Request::is('about'))
							<h2>ABOUT US</h2>
						@elseif(\Request::is('recent-events'))
							<h2>RECENT EVENTS</h2>
						@elseif(\Request::is('upcoming-events'))
							<h2>UPCOMING EVENTS</h2>
						@elseif(\Request::is('courses-offered'))
							<h2>COURSES OFFERED AT CS & IT</h2>
						@elseif(\Request::is('faculty-members'))
							<h2>FACULTY MEMBERS</h2>
						@elseif(\Request::is('blog'))
							<h2>LATEST NEWS</h2>
						@elseif(\Request::is('contact'))
							<h2>CONTACT US</h2>
						@else
							<h2>404 NOT FOUND</h2>
						@endif
{{-- 						<h2>ABOUT US</h2> --}}
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->

<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum" @if(\Request::is('courses-offered'))
			style="background: #ededed;" @endif>
				<div class="container">
					<ul>
						<li><a href="{{ route('index' ) }}">Home</a></li>
						<li>-</li>
						@if(\Request::is('about'))
							<li>About</li>
						@elseif(\Request::is('recent-events'))
							<li>Recent Events</li>
						@elseif(\Request::is('upcoming-events'))
							<li>Upcoming Events</li>
						@elseif(\Request::is('courses-offered'))
							<li>Courses Offered</li>
						@elseif(\Request::is('faculty-members'))
							<li>Faculty Members</li>
						@elseif(\Request::is('blog'))
							<li>Blog</li>
						@elseif(\Request::is('contact'))
							<li>Contact</li>
						@else
							<li>404 Not Found</li>
						@endif
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->

