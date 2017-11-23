@unless(!isset($wrapperclass) || $wrapperclass == '') 
@endunless


<div class="field  {{ @$wrapperclass}}">






    @if(isset($preset_val) && $preset_val != '')
            <?php $preselected = $preset_val; ?>
    @else
        @if(isset(${$preselected_val}))
                <?php $preselected = ${$preselected_val}; ?>
        @else

            @if($task == 'create') 
                <?php $preselected = Illuminate\Support\Facades\Input::old($fieldname); ?>

            @else
                <?php $preselected = $object->$fieldname; ?>

            @endif

        @endif
    @endif

  <label class="label">{{trans('buttons.'.@$fieldlabel)}}</label>
  <div class="control">


    @if($purpose == 'create')
        {!! Form::text($fieldname, @$preselected, array('class' => 'input'.@$class, 'placeholder' => @$placeholder, 'maxlength' => @$maxlength, 'id' => @$id, 'placeholder' => @$placeholder)) !!}
    @else
        {!! Form::text($fieldname, @$preselected, array('class' => 'input'.@$class,'maxlength' => @$maxlength, 'id' => @$id)) !!}
    @endif

  </div>



</div>
<p class="help">{{@$hinttext}}</p>
@unless(!isset($wrapperclass) || $wrapperclass == '') 
@endunless




