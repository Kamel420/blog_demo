<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="{{ route('admin.index') }}">Admin DashBoard</a>
      <a class="navbar-brand" href="{{ route('user.index') }}"><i class="icon-home"></i> Home </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        @foreach($categories AS $categories)
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.category' ,$categories->id) }}">{{ $categories->title}}</a>
          </li>
        @endforeach
        </ul>
      </div>
    </div>
  </nav>

<!-- Page Header --> 
<header class="masthead" style="background-image: url('{{ asset('/assets/img/home-bg.jpg') }}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>BlogName</h1>
            <span class="subheading">BlogSlogan</span>
          </div>
        </div>
      </div>
    </div>
</header>