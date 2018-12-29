<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>
            @if(isset($title)) 
                {{$title}} -- {{env('APP_NAME')}}
            @else
                {{env('APP_NAME')}}
            @endif
        </title>

        @stack('css')


    </head>
    <body>
        @include('navs.nav_main')

        @yield('content')



        @include('navs.footer_1')




        <!-- this loads CDNJS or local files depending on environment -->
        @if( \App::environment() == 'local')
            @include('unstarter.layouts.files_local')
            @include('unstarter.layouts.files_local_materializecss')
            @include('unstarter.layouts.files_local_select2')
        @else
            @include('unstarter.layouts.files_cdnjs')
            @include('unstarter.layouts.files_cdnjs_materializecss')
            @include('unstarter.layouts.files_cdnjs_select2')
        @endif


        {{-- <link rel="stylesheet"  type="text/css" href="{{asset('css/elements_common.css')}}"> --}}
        <link rel="stylesheet"  type="text/css" href="{{asset('css/adjustments_materializecss.css')}}">
        @stack('css')


        <script type="text/javascript">
            // adding -- to attribution
            $("attribution").each(function() {
                  
                  $(this).prepend("一 ");
                });
        </script>

        <!-- filling up universal modal   -->
        {!! Html::script('js/minitool_dom_patch.js') !!}
        <!-- // readmore 3 scripts  -->
        {!! Html::script('js/minitool_showhide.js') !!}

        <!-- necessary for judgment boxes Userattitude -->
        {!! Html::script('js/minitool_attitudes.js') !!}

        <!-- used to update option status being changed (theme, basecountry, etc.)  -->
        {!! Html::script('js/laravel-ujs.js') !!}

        @stack('scripts_in_tail')

    </body>
</html>
