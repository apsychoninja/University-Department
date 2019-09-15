@extends('layouts.admin-main')
@section('title')
	{{ __('Faculty Members') }}
@endsection
@section('dashboard_title')
  {{ __('Faculty Members') }}
@endsection

@section('content')

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
              <h3 class="box-title">Administrators</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Name</th>
	                  <th>Email</th>
	                  <th>Title</th>
	                  
	                  <th>Education</th>
	                  <th>Location</th>
	                  
	                  <th>Action </th>
	                </tr>
                </thead>
                <tbody>
                	@forelse($users as $user)
                	<tr>
                		<td>{{ $user->id }}</td>
                		<td>{{ $user->name }}</td>
                		<td>{{ $user->email }}</td>
                		<td></td>
                		<td></td>
                		<td></td>
                		<td><a href="#"><i class="fas fa-edit" data-user_id="{{ $user->id }}" data-toggle="modal" data-name="{{ $user->name }}" data-email="{{ $user->email }}" data-password="{{ $user->password }}" data-target="#edit-modal"></i></a>&nbsp;&nbsp;<a href="{{ route('admin.faculty_destroy',$user->id) }}"><i class="fas fa-trash-alt"></i></a></td>
                	@empty
                		<tr>
                			no Records Found.
                		</tr>
                	@endforelse
                </tbody>
                <tfoot>
	                <tr>
	                  <th>ID</th>
	                  <th>Name</th>
	                  <th>Email</th>
	                  <th>Title</th>
	                  
  	                  <th>Education</th>
	                  <th>Location</th>
	                  <th>Action</th>
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
        <h4 class="modal-title">Add New Administrator</h4>
      </div>
	  <form enctype="multipart/form-data" action="{{ route('admin.faculty_store') }}" method='POST'>
		@csrf
		<div class="modal-body">
			<div class="form-group">
				<label> Name </label>
				<input type="text" name="name" class="form-control" placeholder="Enter Your Name">
			</div>
			<div class="form-group">
				<label> Email </label>
				<input type="email" name="email" class="form-control" placeholder="Enter Email address">
			</div>
			<div class="form-group">
				<label> Password</label>
				<input type="password" name="password" class="form-control" placeholder="Enter the Password">
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

<div id="edit-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Admin Profile</h4>
      </div>
    <form enctype="multipart/form-data" action="#" method='POST'>
    @method('patch')
    @csrf
    <div class="modal-body">
      <div class="form-group">
        <input type="hidden" name="admin_id" id="admin_id" value="{{}}">
        <label> Name </label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name">
      </div>
      <div class="form-group">
        <label> Email </label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email address">
      </div>
      <div class="form-group">
        <label> Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter the Password">
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


@endsection