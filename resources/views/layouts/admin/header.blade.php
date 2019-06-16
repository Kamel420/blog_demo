<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-primary" id="menu-toggle">Toggle Categories</button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('user.index') }}"><i class="icon-home"></i> Home </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('category.index') }}"><i class="icon-cogs"></i> Manage Categories </a>
        </li>
         <li class="nav-item active">
            @if( Route::currentRouteName() =='admin.index' )
            <a class="nav-link" href="{{ route('admin.create') }}"><i class="icon-plus-sign-alt"></i> New Post</a>
            @else
            <a class="nav-link" href="{{ route('admin.index') }}"><i class="icon-backward"></i> All Posts</a>
            @endif
        </li>
        @if( Route::currentRouteName() =='category.index' )
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('category.create') }}"><i class="icon-plus-sign-alt"></i> New Category</a>
        </li>
        @endif
        </ul>
    </div>
</nav>

<!-- redirect to routes with messages holder--> 

@if(Session::has('message-danger'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message-danger') }}</p>
@endif
@if(Session::has('message-success'))
<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message-success') }}</p>
@endif