<form>
    <div class="form-group">
        {!! Form::label('title', __('Title').'*', ['class' => 'col-md-6 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('title',  ((isset($category) && $category)? $category['title'] : null), ['class' => 'form-control', 'required'=>'required']) !!}
        </div>
    </div>
    <div class="pull-right"> 
        <button type="submit" class="btn btn-danger">Submit</button>
    </div>
</form>