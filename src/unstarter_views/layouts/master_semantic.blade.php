<!-- theme: Basic ui-kit tf:b -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Cache-control" content="public">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="Robots" content="index,follow">
        <meta name="revisit-after" content="10 Days">
        <meta name="author" content="UnrulyNatives.com">
        <link rel="shortcut icon" href="/favicon.ico">
        <meta name="distribution" content="global">
        <meta name="classification" content="Culture">
        <meta name="rating" content="general">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="keywords" content="">
        @if( isset($object) && $task == 'show')
        <meta name="description" CONTENT="{{$object->description or ''}} China sourcing specialist">
        @else
        <meta name="description" content="">
        @endif
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="page-topic" content="">
        <title>
        {{@$title}}
        @if($task == 'show')
            {{$object->name}}
        @endif
        Kailong consulting
        </title>

        <style type="text/css">
            img.gravatar {
                width:2rem; height:2rem
            }

            @media screen and (max-width: 55.5em) {

                .menu.main .title a span, .him {
                    display: none !important;
                    color: black;
                }
            }

            @if($task == 'landingpage')
                @include('layouts.abovethefold_simple')
            @elseif($task == 'create' || $task == 'edit')
                @include('layouts.abovethefold_simple')
            @elseif($task == 'index')
                @include('layouts.abovethefold_simple')
            @else
                @include('layouts.abovethefold_simple')
            @endif

        </style>


        <!-- scripts_in_head -->
        @stack('scripts_in_head')
        <!-- ./ scripts_in_head -->
    </head>
    <body data-show-help-modules="{{ request()->cookie('show-help-modules', '0') }}">

        @if($task == 'create')


        @endif
        @yield('sidebars')





        <div class="pusher">



        @if( \App::environment() == 'local')


        <div class="communique-danger communique-cleared communique-dark" id="">
            <h4>Server LOCAL</h4>
            <p>Nie wprowadzaj danych!!!!!!!!!!!</p>

        

        </div>

        @endif


            <div id="topbar_wrapper">
                <div id="topbar">
                    @include('navs.menu_topbar2')
                </div>
            </div>


            @if(!isset($toolbox)) <?php $toolbox = 1;?> @endif




                @yield('content')



                @yield('swich_type')

            

            </div> <!-- #main -->
            </div> <!-- #main-container -->

            @if($task == 'show' || $task == 'report')

            @endif

            @if(Auth::check() && Auth::user()->hasRole('developer'))
                @includeif('admin._developer_status_box')
            @endif


        </div>

        <div class="hidden" id="specific_help_modules">
            @yield('view_specific_help_modules')
        </div>

        <!-- this loads CDNJS or local files depending on environment -->
        @if( \App::environment() == 'local')
            @include('layouts.files_local')
            @include('layouts.files_local_semantic')
        @else
            @include('layouts.files_cdnjs')
            @include('layouts.files_cdnjs_semantic')
        @endif

        <link rel="stylesheet"  type="text/css" href="{{asset('css/elements_common.css')}}">
        <link rel="stylesheet"  type="text/css" href="{{asset('css/adjustments_semantic.css')}}">


        <?php $cookie_color_th = request()->cookie('color_th','1'); ?>
        @if(!isset($cookie_color_th)) 
            <?php $cookie_color_th = '1'; ?>
        @endif
        {{Session::put($cookie_color_th)}}



        <link rel="stylesheet" class='a' id='colortheme' href="{{asset('css/colortheme_'.request()->cookie('colorTheme','1').'.css')}}">

        <!-- css yield -->
        @stack('css')
        <!-- ./ css -->

        @if($task == 'show')
            <script type="text/javascript">
                            $("#form_del_item_conf").submit(function (event) {
                            var x = confirm("Are you sure you want to delete?");
                                if (x) {
                                    return true;
                                }
                                else {
                                    event.preventDefault();
                                    return false;
                                }

                            });
            </script>
        @endif

        <!-- This script changes color theme  -->
        {!! Html::script('js/change_theme.js') !!}
        <!-- used to update option status being changed (theme, basecountry, etc.)  -->
        {!! Html::script('js/laravel-ujs.js') !!}

        <!-- action by DOM patch   -->
        {!! Html::script('js/minitool_dom_patch.js') !!}

        <!-- semantic-UI component triggers  -->
        {!! Html::script('js/triggers-semantic-ui.js') !!}

        {!! Html::script('js/triggers-common.js') !!}

        <!-- // readmore 3 scripts  -->
        {!! Html::script('js/minitool_showhide.js') !!}


        <script type="text/javascript">
                (function($) {
                    $(document).on('ajax:error', function(xhr, status, error) {
                        alert(error);
                    });
                })(jQuery);
                // przydałoby się coś ładniejszego
        </script>

        <!-- This script shows hidden IF elements (by Peter) -->
        {!! Html::script('js/minitool_show_hiddenUIelements.js') !!}
        
        <!-- This script hides .communique after X seconds (by Peter) -->
        {!! Html::script('js/peter_hide_communique.js') !!}

        <!-- necessary for judgment boxes Userattitude -->
        {!! Html::script('js/minitool_attitudes.js') !!}

        @stack('scripts_in_tail')



        @if(Auth::check() && Auth::user()->hasRole('developer'))
        <!--
                {{ print_r(DB::getQueryLog()) }}
        -->
        @endif

    </body>
    </html>