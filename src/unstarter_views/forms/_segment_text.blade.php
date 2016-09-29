<div class=" p-a-1">
	@unless(!isset($fieldlabel) || $fieldlabel == 'none')
    	<div class="un_input_label "><i class="fa fa-angle-right icon"></i>_ {{trans('buttons.'.$fieldlabel)}} </div>
    @endunless
    <div class=" {{ @$bg_color }}">


        @include('forms._field_text')

    </div>
</div>