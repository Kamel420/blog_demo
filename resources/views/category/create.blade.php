@extends('layouts.admin.app')

@section('content')

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    @include('layouts.admin.sidebar')
    <!-- /#sidebar-wrapper -->
    
    <!-- Page Content -->
    <div id="page-content-wrapper">

      @include('layouts.admin.header')

      <div class="container-fluid">
        <div class="container">
          <h2>Create New Post</h2>

            {!! Form::open(['url' => route('category.store'), 'method'=>'post' , 'class' => 'form-horizontal']) !!}

            @include ('category.form')

            {!! Form::close() !!}

        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
  @include('layouts.admin.footer')
  
@endsection