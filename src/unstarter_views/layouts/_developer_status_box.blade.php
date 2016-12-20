<!-- theme: Fawkes semantic-ui f:f -->
<div class="un_developer un_flex un_flex_ht">

    <div class="un_box csch_bright1">

    <div class="ui header" href="{{URL::to('experiments/l5migration')}}">Important variables</div>

    <div class="ui green label">
Task: {{$task}}</div>
    <div class="ui green label">
Itemkind: {{$itemkind}}</div>


    <div class="ui blue label">
        @if(Auth::check() && Auth::user()->hasRole('Admin'))
        Zalogowany!

            @else
        niezalogowany! <a href="{{URL::to('login/facebook')}}" class="ui green button">Login in with Facebook</a>
        <a href="{{URL::to('login/google')}}" class="ui green button">Login in with Facebook</a>
        <a href="{{URL::to('login/twitter')}}" class="ui green button">Login in with Twitter</a>
        @endif
    </div>

    @if( \App::environment() == 'local')
    <div class="ui label">Środowisko: LOCAL</div>
    @endif

    <div class="ui label">Język: {{ Config::get('app.locale') }}, Tłumaczenie: {{trans('messages.current_locale_is')}}</div>

    <p class="ui label" title="Ostatnio załadowane cookie z danymi usera">Loadup check: {{ Session::get('test_loadup') }}</p>


    </div>
    <div class="un_box csch_dark4">
        <div class="ui header" href="experiments/l5migration">Theme</div>

     <div class="ui green button">
Current theme: {{ Theme::get() }}</div>
    <p>Przełącz:

        <a href="{{URL::to('set_theme/Seldon')}}" title="(Bootstrap)">
          Seldon
        </a>
        <a href="{{URL::to('set_theme/Greame')}}" title="(Bootstrap Gentelalla)">
          Greame
        </a>
        <a href="{{URL::to('set_theme/DeLaPaz')}}" title="(UI-KIT)">
          DeLaPaz
        </a>
 <a href="{{URL::to('set_theme/Fawkes')}}" title="(Semantic - BASE THEME">
         Base theme
        </a>
 <a href="{{URL::to('set_theme/Alpha')}}" title="Nowy interfejs - na bazie inspiracji Ataxa, rozwija Damian">
         Damian
        </a>   </p>
    <p>Variables:
        Session:{{ Session::get('themeName') }};
        Session(theme):{{ Session::get('theme') }}--;
        Session(Check):{{ Session::get('check') }}check;
        Cookie:{{ Cookie::get('theme-name') }};
        Cookie fullMenu: {{ Cookie::get('fullMenu') }};
        .

    </p>
    <p>L5.2 cookies:
        
        <button data-load="{{URL::to('switch_dp/switch_visibility_of_help_modules')}}" class="ui button  tt" data-puthere="#dsb_svhl" data-variation="large" title="Pokaż/ukryj elementy z pomocą"><i class="unhide icon"></i> <i class="help circle icon grey"></i> show-help-modules:  <span id="dsb_svhl">{{request()->cookie('show-help-modules', 'X')}}</span>
    
   </button>

   <br>
        colorTheme: {{request()->cookie('colorTheme', 'X')}}<br>

        .

    </p>


    </div>

    <div class="un_box csch_dark4">
    <div class="ui header" href="experiments/l5migration">Interface</div>

    <p>Ciacho colorTheme: <span class="ui label"> {{ @Cookie::get('colorTheme') }}</span>.</p>
    <span class="ui label">
Session color_th: {{ Session::get('color_th') }}.</span>
    <p> Cookie 'show-advanced-options':<span class="ui label"> {{ @Cookie::get('show-advanced-options') }}</span>.</p>
    <p> Cookie 'show-help-modules':<span class="ui label"> {{ @Cookie::get('show-help-modules') }}</span>.</p>

    </div>


    <div class="un_box csch_dark4">
    <div class="ui header" href="experiments/l5migration">Wzorzec</div>

    <p>Exemplar: {{ request()->cookie('active_exemplar') }}.</p>

    @if(Auth::check() && Auth::user()->hasRole('Admin'))
    <p>User {{Auth::id()}} DB: {{ Auth::user()->settings->active_exemplar}}.</p>

    @endif


    </div>


</div>