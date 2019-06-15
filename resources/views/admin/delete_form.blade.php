@if(isset($post->id))
<!-- Delete Form -->
<form id="delete-form" action="{{ route('admin.destroy',$post->id) }}" 
      method="POST" style="display: none;">
    <input type="hidden" name="_method" value="delete">
    {{ csrf_field() }}
</form>
@endif