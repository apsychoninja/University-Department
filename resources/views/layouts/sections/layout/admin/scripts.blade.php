

	<script type="text/javascript" src="{{ asset('js/style.js') }}"></script>
	<!-- Fastclick -->
	<script type="text/javascript" src="{{ asset('js/fastclick.js') }}"></script>
	<!-- ChartJS -->
	<script type="text/javascript" src="{{ asset('js/Chart.js') }}"></script>


	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script>
            $('#edit-modal').on('show.bs.modal', function (event) {

              var button = $(event.relatedTarget) // Button that triggered the modal
              var name = button.data('name') // Extract info from data-* attributes
              var email = button.data('email')
              var password = button.data('password')
              var admin_id = button.data('admin_id')

              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('.modal-body #name').val(name)
              modal.find('.modal-body #email').val(email)
              modal.find('.modal-body #password').val(password)
              modal.find('.modal-find #admin_id').val(admin_id)

            })

            $('#edit-software-modal').on('show.bs.modal',function(event){
            	var button = $(event.relatedTarget)
            	var title = button.data('title')
            	var description = button.data('description')
            	var image = button.data('imgsrc')
            	var download_link = button.data('download_link')

            	var modal = $(this)
            	modal.find('.modal-body #title').val(title)
            	modal.find('.modal-body #img').attr('src','/images/uploads/softwares/'+image)
            	tinyMCE.activeEditor.setContent(description);
            	modal.find('.modal-body #description').val(description)
            	modal.find('.modal-body #download_link').val(download_link)
            })
        </script>




	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/raphael.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/morris.min.js') }}"></script>
	<!-- Sparkline -->
	<script type="text/javascript" src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
	<!-- jvectormap  -->
	<script type="text/javascript" src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.knob.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/daterangepicker.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap3-wysihtml5.all.min.js') }}"></script>
	<!-- SlimScroll -->
	<script type="text/javascript" src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/fastclick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/adminlte.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/dashboard.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/demo.js') }}"></script>
