<div class='{{@$class}} m-3 p-2 csch_subtle_5'> 

    <label for="{{@$fieldname}}">{{trans('buttons.'.$fieldname)}}</label>
    <input name="{{@$fieldname}}" id="{{@$fieldname}}" type="range" min="{{@$value_first}}" max="{{@$value_last}}" value="{{@$object->$fieldname}}"  oninput="{{@$fieldname}}output.value = {{@$fieldname}}.value"> 
    <output name="{{@$fieldname}}output" id="{{@$fieldname}}output" for="{{@$fieldname}}">
    	@if($task=='create')
    	--
    	@else
    	{{@$object->$fieldname}}
    	@endif
    </output>


</div>