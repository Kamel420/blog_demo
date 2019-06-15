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
          <h2>Edit Post</h2>
          
             {!! Form::model($post, [
                'method' => 'PATCH',
                'url' => route('admin.update',$post->id),
                'class' => 'form-horizontal'
            ]) !!}

            @include ('admin.form')

            {!! Form::close() !!}
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
  @include('layouts.admin.footer')
  
@endsection