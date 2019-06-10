<section class="content-header">
 

  @switch(Route::current()->getName())
 
    @case('admin.profile')
      <h1> User Profile </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i>&nbsp; Home</a></li>
        <li class="active"> Profile </li>
      </ol>
      @break


    @default
      <h1>  Dashboard <small>Administrator</small></h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
  @endswitch

</section>