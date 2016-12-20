<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="Robots" content="index,follow">
        <meta name="revisit-after" content="10 Days">
        <meta name="author" content="Piotr Plebaniak chiny.pl">
        <link rel="shortcut icon" href="/favicon.ico">
        <meta name="distribution" content="global">
        <meta name="classification" content="Culture">
        <meta name="rating" content="general">
        <meta name="description" content="China sourcing, factory inspections, purchasing agent for China and Taiwan {{ @$meta_extra_description }}">
        <meta name="keywords" content=" {{ @$meta_extra_keywords }}">

        <meta name="mobile-web-app-capable" content="yes">
        <meta name="page-topic" content="China sourcing, factory inspections, purchasing agent for China and Taiwan">


        <title> 
            @if(isset($title))
                {{$title}} -
            @endif
            @if(isset($itemkind) && $itemkind == 'posts' && isset($task) &&$task == 'show')
                
            @endif China sourcing agent. 

        </title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <style type="text/css">
            @include('layouts.abovethefold_bootstrap')
        </style>

    </head>
<body>



        @if(request()->cookie('daynight') && request()->cookie('daynight') == 1)
            <?php $daynight = 'day-background'; ?>

        @else 
         <?php $daynight = ''; ?>

        @endif


    <div class="un_flex un_flex_hs {{@$daynight}}" id="container_main">


<div class="side-nav">

       <h1 class="m-2">
           <a href="http://chiron.consulting/client-dashboard">Chiron</a>

       </h1>
    <div class="user-section">
    @if(Auth::check() )
    
    <a href="{{URL::to('profile/'.Auth::user()->id)}}"><img class="circle" src="{{ Auth::user()->gravatar }}">
    <p>{{Auth::user()->name}}</p>
    </a>
    @endif
</div>

<form method="GET" action="{{URL::to('search/posts')}}" accept-charset="UTF-8">
    <div class="form-group search" title="W tytułach i treści artykułów">
        <input class="form-control search-bar" placeholder="Szukaj..." name="searched" type="text">
    </div>                  
</form> 

    <div class="un_flex un_flex_hc">
{{--             
        <button data-load="{{URL::to('loadnav/menu_topbars')}}" class='btn btn-sm csch_dark_1' data-puthere="#placeholder_topbars"  data-toggle="tooltip" data-placement="top" title="Pokaż góną belkę"><i class="fa fa-ellipsis-h"></i> </button>

        <button data-load="{{URL::to('loadnav/menu_advanced')}}" class='btn btn-sm csch_dark_2' data-puthere="#placeholder_sidemenu"  data-variation="large" data-toggle="tooltip" data-placement="top" title="Zobacz menu"><i class="fa fa-ellipsis-v"></i> </button>
            
        <button data-load="{{URL::to('loadnav/menu_widgets')}}" class='btn btn-sm csch_dark_2' data-puthere="#placeholder_sidemenu"  data-variation="large" data-toggle="tooltip" data-placement="top" title="Zobacz listę widżetów"><i class="fa fa-th"></i> </button>

        <a href="{{ URL::to('artykul/losowy') }}" class="btn btn-sm csch_dark_2" data-toggle="tooltip" data-placement="top" title="Wylosuj jeden z ponad dwustu artykułów...">
          <i class="fa fa-random  "></i>
        </a> --}}
    </div>


<div class="menu" id="placeholder_sidemenu">


    @include('navs.menu_advanced')

</div>

<div class="line"><hr></div>

            
    <div class="footer">
    <p><a href="{{URL::to('kontakt2')}}" class="" title="Potrzebujesz wiedzy o Chinach? Zadaj pytanie autorowi Chiny.pl"><i class="fa fa-envelope icon "></i> Kontakt</a></p>
</div>


</div>


<div class="content-area">


<div class="" id="placeholder_topbars">
        @include('navs.menu_topbars')
</div>
        
<div id="">
    <div class="row">


        @if( \App::environment() == 'local')


                <div class="communique-danger communique-cleared" id="">
                    <h4>Server LOCAL</h4>
                    <p>Nie wprowadzaj danych!!!!!!!!!!!</p>

                

                </div>

        @endif



    </div>

    @include('navs.nav_breadcrumbs')


    <div class="row">



            @yield('content')


    </div>






</div>


        @include('segments.section_footer_advanced')


</div>
</div>
<div class="hidden" id="sp" style="display:none;"></div>


    {{-- <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"  type="text/css" href="{{asset('css/elements_common.css')}}">
        <link href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css rel=stylesheet>


    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
            <link rel="stylesheet"  type="text/css" href="{{asset('css/unrulynatives_attitudes.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/advanced_presenter.css')}}">
    <link rel="stylesheet"  type="text/css" href="{{asset('css/adjustments_bootstrap_advanced_presenter.css')}}">
        <link rel="stylesheet"  type="text/css" href="{{asset('css/adjustments_kailong.css')}}">

    @stack('css')


@if($task == 'create' || request()->cookie('sidebar') && request()->cookie('sidebar') == 0 || isset($sidebar_disable))
<style type="text/css">
    .side-nav {
        display: none;
    }

.content-area {
    
    margin-left: 0;
}






</style>

@endif



    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
    {!! Html::script('js/jquery-3.1.1.min.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>


        <!-- used to update option status being changed (theme, basecountry, etc.)  -->
        {!! Html::script('js/laravel-ujs.js') !!}

        <!-- action by DOM patch   -->
        {!! Html::script('js/minitool_dom_patch.js') !!}

        <!-- necessary for judgment boxes Userattitude -->
        {!! Html::script('js/minitool_attitudes.js') !!}


        <!-- // readmore 3 scripts  -->
        {!! Html::script('js/minitool_showhide.js') !!}



    <!-- set_default_sidepanel   -->
    <script type="text/javascript">
        // $('.box_aside').addClass("shrink");
        $(document).ready(function() {


            $('.pagination li').addClass('page-item');
            $('.pagination li a').addClass('page-link');
            $('.pagination span').addClass('page-link');

            @if(isset($task) && $task == 'view' )
            @endif






            // $(function(){
            //   $('[data-toggle="tooltip"]').tooltip();
            // });

        });


        $('body').on('hover', '[data-toggle="tooltip"]', function() {
            $(this).tooltip();
        });




            http://codepen.io/JosephShenton/pen/YqVoJB
            // $('body').toggleClass('day-background');
            // $('#cb1').on('click', function () { $('.content-area').toggleClass('day-background'); });
            $('#cb1').on('click', function () { $('#container_main').toggleClass('day-background'); });
            // $('#cb1').on('click', function () { $('article').toggleClass('day-background'); });

        @if(request()->cookie('daynight') && request()->cookie('daynight') == 1)
            
            $('#cb1').attr("checked","checked");

        @else 

            // $('#cb1').attr("checked","checked");

        @endif


    </script>

    <style type="text/css">
        
        @if(request()->cookie('daynight') && request()->cookie('daynight') == 1)
            
/*            .toggle:checked + .toggle-button:after {
                  left: 0%;
            }
*/
        @else 


        @endif
    </style>





    <script type="text/javascript">

        $('[set-default]').click(function() {
            var defsp = $(this).attr("set-default");
            $(this).toggleClass('red');
            if(defsp == '3') {
                $('.box_aside').addClass("shrink");
            } else {
                $('.box_aside').removeClass("shrink");
            }
        });




    </script>




    @stack('scripts_in_tail')



</body>
</html>