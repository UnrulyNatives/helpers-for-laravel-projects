<div class="{{@$class}} un_box m-2 p-1 csch_subtle_3">
    {!! Form::label($fieldname, trans('messages.select_picture')) !!}
    <div class="upload">
        <input type="file" name="{{ $fieldname }}" id="{{ $fieldname }}">
    </div>

    <img src='{{URL::to(@$placeholder)}}' id="take_a_look">   

</div> 




