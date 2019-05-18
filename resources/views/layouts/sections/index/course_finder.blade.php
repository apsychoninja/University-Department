			<!-- Course Finder  ______________________________ -->
	        <div class="course-search-option wow fadeInUp" @if(\Request::is('courses-offered'))
			style="background: #ededed;" @endif>
	        	<div class="container">
	        		<form action="#">
	        			<div class="row">
	        				<div class="single-input float-left input-one">
	        					<div>
	        						<input type="text" placeholder="Enter course name">
	        					</div> 
	        				</div> <!-- /.single-input -->
							
							<div class="single-input float-left input-two">
	        					<div>
	        						<select class="selectpicker">
										<option>Select cetegory</option>
										<option>Course 1</option>
										<option>Course 2</option>
										<option>Course 3</option>
										<option>Course 4</option>
									</select>
	        					</div>
	        				</div> <!-- /.single-input -->

	        				<div class="single-input float-left input-two time-select">
	        					<div>
	        						<input type="text" placeholder="Time" class="timepicker">
									<span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
	        					</div>
	        				</div> <!-- /.single-input -->
							
							<div class="single-input float-left input-three">
	        					<div>
	        						<button class="tran3s p-color-bg themehover">search</button>
	        					</div>
	        				</div> <!-- /.single-input -->
	        			</div>
	        		</form>
	        	</div>
	        </div> <!-- /.course-search-option -->
	        

