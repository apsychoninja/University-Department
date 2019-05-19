<!-- Welcome Section ___________________________ -->
	        <div class=" {{ (\Request::is('about')) ? "welcome-section-two" : "welcome-section" }}">
	        	<div class="container">
	        		<div class="section-title wow fadeInUp">
	        			<h2 class="p-color">Welcome to edutech</h2>
	        			<h5>awesome success with student</h5>
	        			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem </p>
	        		</div> <!-- /.section-title -->

	        		<div class="row">
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
	        				@if(\Request::is('about'))
	        					<?php echo  '<i class="fa fa-graduation-cap" aria-hidden="true"></i><h3>CERTIFIED TEACHERS</h3><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores eos qui ratione </p>' ?>
        					@else
        						<?php echo  '<h3><i class="fa fa-graduation-cap" aria-hidden="true"></i> LEARN COUSES first</h3><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores eos qui ratione </p>'?>
	        				@endif
	        				
	        			</div>
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
	        				@if(\Request::is('about'))
	        					<?php echo '<i class="fa fa-tags" aria-hidden="true"></i> 
	        				<h3>440 Courses available </h3>
	        				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores eos qui ratione </p>' ?>
	        				@else
	        					<?php echo '<h3><i class="fa fa-tags" aria-hidden="true"></i> 440 Courses available</h3>
	        				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores eos qui ratione </p>' ?>
	        				@endif
	        			</div>
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
	        				@if(\Request::is('about'))
	        					<i class="far fa-gem" aria-hidden="true"></i>
	        					<h3>Everything you need</h3>
	        					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores eos qui ratione </p>
	        				@else
	        					<style type="text/css">
	        						i.far.fa-gem {
									    width: 92px;
									    height: 92px;
										background: transparent; 
									    border-radius: 50%;
									    -moz-border-radius: 50%;
									    -webkit-border-radius: 50%;
									    -o-border-radius: 50%;
									    -ms-border-radius: 50%;
									     margin: 25px auto 34px auto !important; 
									     line-height: 0px !important; 
									    font-size: 36px;
									    color: #cd2122;
									}
	        					</style>
	        					<h3><i class="far fa-gem" aria-hidden="true"></i> Everything you need</h3>
	        					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores eos qui ratione </p>
	        				@endif
	        			</div>
	        		</div>
	        	</div> <!-- /.container -->
	        </div> <!-- /.welcome-section -->
