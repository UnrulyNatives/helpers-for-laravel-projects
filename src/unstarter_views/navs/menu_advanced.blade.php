
    <a class="active" href="{{URL::to('leads')}}"><i class="icon "></i> Leads</a>

    <a class="" href="{{URL::to('expenses')}}"><i class="icon "></i> Expenses</a>


    <a class="" href="{{URL::to('solutions')}}"><i class="icon "></i> FAQ & Solutions</a>





    <hr>

    @if(Auth::check())
      <a href="{{ URL::to('client-dashboard') }}" class="text-danger" style="color:red;">
        
        {{trans('buttons.dashboard')}}
      </a>
       <a href="{{ URL::to('settings') }}" class="" target="_blank">
        
        {{trans('buttons.settings')}}
      </a>
        <a href="{{URL::to('logout')}}"><i class="fa fa-signout"></i> Logout</a>
    @else
	   <a href="{{URL::to('login')}}"><i class="icon ion-android-exit"></i> Login</a>

    @endif


