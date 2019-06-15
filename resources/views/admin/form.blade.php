<form>
    <div class="form-group">
        {!! Form::label('title', __('Title').'*', ['class' => 'col-md-6 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('title',  ((isset($post) && $post)? $post['title'] : null), ['class' => 'form-control', 'required'=>'required']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('description', __('Description').'*', ['class' => 'col-md-6 control-label']) !!}
        <div class="col-md-6">
            {!! Form::textarea('description', ((isset($post) && $post)? $post['description'] : null), ['class' => 'form-control', 'required'=>'required']) !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
        {!! Form::label('category_id', __('Category').('*'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('category_id', [NULL=>__('Select Category')]+$categories_list,((isset($post) && $post)? $post['category_id'] : null), ['class' => 'form-control', 'required'=>'required']) !!}
        </div>
    </div>
    <div class="pull-right"> 
        <button type="submit" class="btn btn-danger">Submit</button>
    </div>
</form>