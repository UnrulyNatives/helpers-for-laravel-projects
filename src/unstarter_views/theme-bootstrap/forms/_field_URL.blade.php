<label for="{{$fieldname}}">{{trans('buttons.'.$fieldname)}}</label>
<div class="input-group mb-2 mr-sm-2 mb-sm-0">
	<div class="input-group-addon">URL</div>

@if($purpose == 'create')
    {!! Form::text($fieldname, @$preselected, array('class' => 'form-control '.@$class, 'placeholder' => @$placeholder, 'maxlength' => @$maxlength, 'id' => @$id, 'aria-describedby' => $fieldname.'Help')) !!}
@else


    {!! Form::text($fieldname, $object->$fieldname, array('class' => 'form-control '.@$class,'maxlength' => @$maxlength, 'id' => @$id, 'placeholder' => @$placeholder, 'aria-describedby' => $fieldname.'Help')) !!}
@endif

<small id="{{$fieldname}}Help" class="form-text text-muted">{{@$hint}}</small>
</div>


