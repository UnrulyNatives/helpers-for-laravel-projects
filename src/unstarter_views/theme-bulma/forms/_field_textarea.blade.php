@unless(isset($fieldlabel) && $fieldlabel == 'none') 
    
    <div class="un_input_label "><i class="fa fa-angle-right icon"></i>_ {{trans('buttons.'.$fieldlabel)}} </div>

@endunless


  

<label class="label">{{trans('buttons.'.@$fieldlabel)}}</label>

@unless(!isset($wrapperclass) || $wrapperclass == '') 
<div class="field">
@endunless

  <div class="control">

    @if($purpose == 'create')
        {!! Form::textarea($fieldname, Illuminate\Support\Facades\Input::old($fieldname), array('class' => 'textarea '.@$class, 'size' => @$size, 'id' => @$id)) !!}
    @else
        {!! Form::textarea($fieldname, $object->$fieldname, array('class' => 'textarea '.@$class, 'size' => @$size, 'id' => @$id, 'placeholder' => @$placeholder)) !!}
    @endif


  </div>

@unless(!isset($wrapperclass) || $wrapperclass == '') 
    </div>
@endunless

