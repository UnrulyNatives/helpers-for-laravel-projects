<div class="form-group">
    @unless(isset($fieldlabel) && $fieldlabel == 'none') 

    <label for="exampleFormControlTextarea1">{{trans('buttons.'.$fieldlabel)}}</label>
    @endunless

    @if($purpose == 'create')
        {!! Form::textarea($fieldname, Input::old($fieldname), array('class' => "form-control ".@$class, 'size' => @$size, 'id' => @$id)) !!}
    @else
        {!! Form::textarea($fieldname, $object->$fieldname, array('class' => "form-control ".@$class, 'size' => @$size, 'id' => @$id, 'placeholder' => @$placeholder)) !!}
    @endif
  </div>









