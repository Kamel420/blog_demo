@extends('layouts.user.app')
<?php
// dd($categories);
?>
@section('content')
  <!-- Navigation -->
  @include('layouts.user.header')

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
       @if($post->count() > 0)
        @foreach($post AS $post)
            <div class="post-preview">
              <a href="{{ route('user.show',$post->id) }}">
                <h2 class="post-title">
                {{ $post->title }}
                </h2>
                <h3 class="post-subtitle">
                {{ str_limit( $post->description , $limit = 50, $end = '...') }}
                </h3>
              </a>
              <p class="post-meta">Posted
              <!-- By <a href="#"> Bootstrap</a> -->
                on {{ $post->created_at->format('d M Y') }}</p>
            </div>
            @if(!$loop->last)
            <hr>
            @endif
          @endforeach
        @else
        <h3 class="post-subtitle">No Posts In This Category </h3>
        @endif
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  @include('layouts.user.footer')
  
@endsection
