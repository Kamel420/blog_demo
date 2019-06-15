@extends('layouts.user.app')

@section('content')
  <!-- Navigation -->
  @include('layouts.user.header')

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              Title
            </h2>
            <h3 class="post-subtitle">
              Content
            </h3>
          </a>
          <p class="post-meta">Posted
          <!-- By <a href="#"> Bootstrap</a> -->
            on Month xx, xxxx</p>
        </div>
        <hr>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  @include('layouts.user.footer')
  
@endsection
