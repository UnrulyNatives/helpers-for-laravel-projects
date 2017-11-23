<div class="csch_dark_12 m-1 p-1" style="border:2px dotted #777!important;">
  <h3 class="csch_dark_11"> <i class="fa fa-check"></i> {{trans('buttons.'.$fieldlabel)}}</h3>
  <div class="btn-group btn-toggle un_flex un_flex_hc m-0 p-0 " data-toggle="buttons" rel='view_mode'>

      @php 
      // print_r($attyn);
      @endphp
      @foreach($selectarray as $sa => $key)
          <label class="btn" for="{{$fieldname}}_{{$sa}}" title="">
            <input type="radio" name="{{$fieldname}}"  id="{{$fieldname}}_{{$sa}}" value="{{$key}}"> 

                @php
                    $itemtype = str_singular($loopitemkind);
            
                    //getting Class name
                    $class_name = ucfirst($itemtype);

                    if($itemtype == 'user') {
                        $name = "App\\" . $class_name;
                    } else {
                        $name = "App\\Models\\" . $class_name;
                    }
                    $class = new $name;
                    if (class_exists($name) && get_parent_class($class) == 'Illuminate\Database\Eloquent\Model') {
                        $element = $class->find($key);
                        // print_r($element);
                        // echo $loopcolumnname;   
                        // echo $element->$loopcolumnname;   
                    }

                    // echo $name;
                    // echo $key;
                    //  echo $element->$loopcolumnname;  
                    //  echo $loopcolumnname;  


                @endphp

                    @if($itemtype == 'user') 
                        {{ App\User::find($key)->name }}
                    @else
                        {{ $element->$loopcolumnname}}
                    @endif
                     {{-- {{ $element->$loopcolumnname}}    --}}
            
            {{-- {{ App\User::find($key)->name }} --}}
          

          </label>
      @endforeach

  </div>
</div>