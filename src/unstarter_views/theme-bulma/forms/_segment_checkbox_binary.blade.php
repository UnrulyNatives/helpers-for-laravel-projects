
<h3>{{$fieldname}}</h3>

<div class="field is-grouped" rel="checkbox_binary">


@foreach($names as $check)
    @if ($loop->first)
        @php $val = 0; @endphp
    @endif

    @if ( $loop->iteration > $value_last + 1)
    	@unset($val)
        @break
    @endif
    {{-- Value: {{$val}}. --}}
  <label class="button {{(isset($preselected_val) && $preselected_val==$val) ? 'is-primary ' : 'is-default' }}" for="{{ $fieldname }}_{{@$val}}" title="">
    <input type="radio" name="{{ $fieldname }}"  id="{{ $fieldname }}_0" value="{{@$val}}" {{(isset($preselected_val) && $preselected_val==$val) ? 'checked="checked"' : '' }}> 
    {{$check}} ({{@$val}})
  </label>
	<?php $val++ ?>
@endforeach


</div>