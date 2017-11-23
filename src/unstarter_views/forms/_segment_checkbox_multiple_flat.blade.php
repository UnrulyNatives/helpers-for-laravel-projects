<div class="csch_dark_12 m-1 p-1" style="border:2px dotted #777!important;">
  <h3 class="csch_dark_11" title="{{($task == 'edit')?'Original value is '.$object->standpoint:'--'}}"> <i class="fa fa-check"></i> {{trans('buttons.'.$fieldlabel)}}</h3>
  <div class="btn-group btn-toggle un_flex un_flex_hc un_flex_wrap m-0 p-0 " data-toggle="buttons" rel='checkbox_binary'>

      @php 
      // print_r($attyn);
      @endphp
      @foreach($arr as $sa => $key)

        @if($task == 'edit')

          <label class="btn {{($object->standpoint ==$sa)?'btn-primary':'btn-default'}} mx-1" for="{{$fieldname}}_{{$sa}}" title="">
            <input type="radio" name="{{$fieldname}}"  id="{{$fieldname}}_{{$sa}}" value="{{$sa}}" checked="checked"> {{$key}}
          </label>

        @else
          <label class="btn btn-primary mx-1" for="{{$fieldname}}_{{$sa}}" title="">
            <input type="radio" name="{{$fieldname}}"  id="{{$fieldname}}_{{$sa}}" value="{{$sa}}" checked="checked"> {{$key}}
          </label>
        @endif
      @endforeach


  </div>
</div>