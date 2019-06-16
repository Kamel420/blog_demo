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
          <h2>Edit Categories</h2>
          <!-- <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                       -->
          <div class="table-responsive">          
          <table class="table table-dark">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach($categories AS $categories)
              <tr>
                <td  class="counterCell">)</td>
                <td>{{ $categories->title }}</td>
                <td>{{ $categories->created_at->format('d M Y')  }}</td>
                <td><a href="{{ route('category.edit',$categories->id) }}"><i class="icon-edit"></i></a> 
                | 
                <a  href="#" onclick="delete_post()" style="color:red;"><i class="icon-trash"></i></a></td>
            </tr>
            @endforeach

            @include('category.delete_form')

            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
  @include('layouts.admin.footer')
  
@endsection