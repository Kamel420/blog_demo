@if(isset($categories->id))
<!-- Delete Form -->
<form id="delete-form" action="{{ route('category.destroy',$categories->id) }}" 
      method="POST" style="display: none;">
    <input type="hidden" name="_method" value="delete">
    {{ csrf_field() }}
</form>
@endif