
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading"><a  style="text-decoration:none;"href="{{route('admin.index')}}">Categories</a></div>
    <div class="list-group list-group-flush">
    @foreach($categories AS $categories)
    <a href="{{route('admin.category',$categories->id)}}"  class="list-group-item list-group-item-action bg-light">{{$categories->title}}</a>
    @endforeach
    </div>
</div>

