
@unless(isset($fieldlabel) && $fieldlabel == 'none') 
       
{{-- <div class="un_input_label p-1"><i class="fa fa-angle-right icon"></i>_ {{trans('buttons._'.$fieldlabel)}} </div>         --}}
@endunless

    @if(isset($icon))
        <div class="p-1 un_widefull csch_subtle_3">
                <div class="btn">
                    <i class="fa {{ @$icon }}"></i>
                </div>
    @else

        <div class="p-1 un_widefull">
    @endif

         @if($purpose == 'create')
            {!! Form::select($fieldname, ${$selectarray}, @${$preselected_val}, ['class' => '{{ @$class }}']) !!}
        @else
            {!! Form::select($fieldname, ${$selectarray}, $object->$fieldname, ['class' => '{{ @$class }}']) !!}

        @endif



    </div>