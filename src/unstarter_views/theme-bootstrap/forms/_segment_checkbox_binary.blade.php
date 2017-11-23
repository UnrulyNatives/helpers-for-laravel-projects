
<h3>{{$fieldname}}</h3>

<div class="btn-group btn-toggle un_flex un_flex_hc m-0 p-2" data-toggle="buttons" rel='view_mode'>


@foreach($names as $check)
    @if ($loop->first)
        @php $val = 0; @endphp
    @endif

    @if ( $loop->iteration > $value_last + 1)
    	@unset($val)
        @break
    @endif
    {{-- Value: {{$val}}. --}}
  <label class="btn {{(isset($preselected_val) && $preselected_val==$val) ? 'btn-primary active' : 'btn-default' }}" for="{{ $fieldname }}_{{@$val}}" title="">
    <input type="radio" name="{{ $fieldname }}"  id="{{ $fieldname }}_0" value="{{@$val}}" {{(isset($preselected_val) && $preselected_val==$val) ? 'checked="checked"' : '' }}> 
    {{$check}} ({{@$val}})
  </label>
	<?php $val++ ?>
@endforeach


</div>