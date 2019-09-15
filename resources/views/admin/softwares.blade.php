@extends('layouts.admin-main')
@section('title')
	{{ __('Softwares') }}
@endsection

@section('dashboard_title')
	{{ __('Softwares') }}
@endsection

@section('content')

<!-- =============================================== -->

    <!-- Main content -->
    <section class="content">


		<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Add New</button>

		<div class="col-xs-12">
		@if(session()->has('success'))
		<div class="alert alert-success">
			{{ session()->get('success') }}
		</div>
		@endif

		@if(session()->has('delete'))
		<div class="alert alert-danger">
				{{ session()->get('delete') }}
		</div>
		@endif
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Softwares</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Name</th>
	                  <th>Description</th>
	                  <th>Download</th>
	                  <th>Action </th>
	                </tr>
                </thead>
                <tbody>

                	@forelse($software as $user)
                	<tr>
                		<td>{{ $user->id }}</td>
                		<td><img src="/images/uploads/softwares/{{ $user->image }}" style="width: 30px; height: 30px; border-radius: 50%;" /> &nbsp;{{ $user->title }}</td>
                		<td >{!! substr($user->description, 0, 40); !!} ...</td>
                		<td>{{ $user->download_link }}</td>
                		<td><a href="#"><i class="fas fa-edit" data-user_id="{{ $user->id }}" data-title="{{ $user->title }}" data-description="{{ $user->description }}" data-download_link="{{ $user->download_link }}" data-imgsrc="{{ $user->image }}" data-toggle="modal"  data-target="#edit-software-modal"></i></a>&nbsp;&nbsp;<a href="{{ route('software_destroy',$user->id) }}"><i class="fas fa-trash-alt"></i></a></td>
                	@empty
                		<tr>
                			<td>no Records Found.</td>
                		</tr>
                	@endforelse
                </tbody>
                <tfoot>
	                <tr>
	                  <th>ID</th>
	                  <th>Name</th>
	                  <th>Description</th>
	                  <th>Download</th>
	                  <th>Action </th>
  	                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      </div>


      <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Software</h4>
      </div>
	  <form enctype="multipart/form-data" action="{{ route('software.store') }}" method='POST'>
		@csrf
		<div class="modal-body">
			<div class="form-group">
				<label> Title </label>
				<input type="text" name="title" class="form-control" placeholder="Enter Your Name">
			</div>
			<div class="form-group">
				<label>Image</label>
				<input type="file" name="image">
			</div>
			<div class="form-group">
				<label> Description </label>
				<textarea type="textarea" name="description" ></textarea>
			</div>
			<div class="form-group">
				<label> Download Link</label>
				<input type="url" name="download_link" class="form-control" placeholder="Enter the Password">
			</div>
			
      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-primary" >Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	</form>
	</div>

  </div>
</div>

<div id="edit-software-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Software</h4>
      </div>
    <form enctype="multipart/form-data" action="{{ route('software.update',$user->id) }}" method='POST'>
    @method('patch')
    @csrf
    <div class="modal-body">
			<div class="form-group">
				<label> Title </label>
				<input type="text" id="title" name="title" class="form-control" placeholder="Enter Your Name">
			</div>
			<div class="form-group">
				<img id="img" name="img" src="" style="border-radius: 50px; height: 100px; width: 100px;">
				<label>Image</label>
				<input type="file" name="image">
			</div>
			<div class="form-group">
				<label> Description </label>
				<textarea type="textarea" id="description" name="description" ></textarea>
			</div>
			<div class="form-group">
				<label> Download Link</label>
				<input type="url" name="download_link" id="download_link" class="form-control" placeholder="Enter the Password">
			</div>
			
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
  </form>
  </div>

  </div>
</div>


    </section>
   

@endsection