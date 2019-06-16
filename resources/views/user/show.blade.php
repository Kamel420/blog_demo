@extends('layouts.user.app')
<?php
// dd($post->category->title);
?>
@section('content')
  <!-- Navigation -->
  @include('layouts.user.header')

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <div class="card text-center">
        <div class="card-header">
        {{ $post->category->title }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->description}}</p>
            <a href="#" onclick="goBack()" class="btn btn-primary">Go Back</a>
        </div>
        <div class="card-footer text-muted">
         <!-- {{$post->created_at->diffForHumans()}} -->
         {{ $post->created_at->format('D d M Y -  h:i a') }}
        </div>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  @include('layouts.user.footer')
  
@endsection
