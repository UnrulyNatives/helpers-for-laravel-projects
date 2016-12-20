<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Cache-control" content="public">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <META name="Robots" content="index,follow">
        <META name="revisit-after" content="10 Days">
        <meta name="author" content="UnrulyNatives.com">
        <link rel="shortcut icon" href="favicon.ico">
        <meta name="distribution" content="global">
        <META name="classification" content="Culture">
        <META name="rating" content="general">

        @if(!isset($itemkind)) <?php $itemkind = 'pages';?> @endif
        @if(!isset($task)) <?php $task = 'view';?> @endif

        <title>Chiron Consulting - China sourcing expert </title>

        <meta name="keywords" content="">
        @if( isset($object) && $task == 'show')
        <META NAME="description" CONTENT="{{$object->description or ''}} ">
        @else
        <META NAME="description" CONTENT="Chiron Consulting - China sourcing, factory inspections, quality control">
        @endif
        <META name="page-topic" content="Chiron Consulting - China sourcing, factory inspections, quality control">

        <style type="text/css">

            {{-- @include('layouts._abovethefold_seldon') --}}
            
            img.gravatar {width:2rem; height:2rem}


        </style>



    </head>

    <body class="tm-background Site"  data-show-help-modules="{{ request()->cookie('show-help-modules', '0') }}">





    @yield('communiques')


        <!--  Site-content  -->
    <main class=" un_widefull">

    
    @yield('content')


    </main>






        <!-- this loads CDNJS or local files depending on environment -->
        @if( \App::environment() == 'local')
            @include('layouts.files_local')
            @include('layouts.files_local_bootstrap')

        @else
            @include('layouts.files_cdnjs')
            @include('layouts.files_cdnjs_bootstrap')

        @endif



        {{-- CSS OVERRIDES FOR BASE THEME (UI-KIT), which name is DELAPAZ --}}
        {{-- <link rel="stylesheet" href="{{asset('css/solved_by_flexbox.css')}}"> --}}
        <link rel="stylesheet"  type="text/css" href="{{asset('css/elements_common.css')}}">
        <link rel="stylesheet"  type="text/css" href="{{asset('css/adjustments_bootstrap.css')}}">

        {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel=stylesheet> --}}
        <!-- $cookie_colorTheme = request()->cookie('colorTheme','1'); -->
        <?php $cookie_colorTheme = request()->cookie('colorTheme', '1'); ?>
        <link rel="stylesheet" class='a' id='colorTheme' href="{{asset('css/colortheme_'.@$cookie_colorTheme.'.css')}}">

        <!-- css -->
        @stack('css')
        <!-- ./ css -->

        <!-- used to update option status being changed (theme, basecountry, etc.)  -->
        {!! Html::script('js/laravel-ujs.js') !!}

        <!-- filling up universal modal   -->
        {!! Html::script('js/minitool_dom_patch.js') !!}
        <!-- // readmore 3 scripts  -->
        {!! Html::script('js/minitool_showhide.js') !!}

    {!! Html::script('js/minitool_slow_scrolldown.js') !!}


        <!-- scripts_in_tail -->
        @stack('scripts_in_tail')
        <!-- ./ scripts_in_tail -->


</body>
</html>