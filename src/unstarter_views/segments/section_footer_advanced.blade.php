


<footer class="flex-rw">

  <section class="footer-bottom-section ">
    
  <p>Kailong information management system 

  </p>
  </section>
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">Your leads</h4></li>
    <li><a href='{{URL::to('leads')}}' class="generic-anchor footer-list-anchor" itemprop="significantLink">Ulubione widżety</a></li>


    <li>
      <a href="{{URL::to('kontakt')}}" class="generic-anchor footer-list-anchor text-danger" title="Potrzebujesz wiedzy o Chinach? Zadaj pytanie autorowi Chiny.pl"><i class="fa fa-help icon "></i>Zadaj pytanie</a></li>
    <li>

  
    <hr>
    
    <li>
        <a href="{{URL::to('login')}}" class="generic-anchor footer-list-anchor"><i class="fa fa-sign-in"></i> Zaloguj</a>
               

    </li>



  </ul>

  
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">Ważne i ciekawe</h4>

    </li>


    <li>
      <a href="{{URL::to('linki')}}" class="item" title="Połączenia do treści on-line: słowniki, nauka języka, wiedza o historii i kulturze Chin"><i class="linkify icon "></i> Linki zewnętrzne</a></li>





  </ul>

  


  <ul class="footer-list-top">
    <li id='help'>
      <h4 class="footer-list-header">Kontakt i współpraca</h4></li>
    <li>
<a href="{{URL::to('kontakt2')}}" target="_blank" class="generic-anchor footer-list-anchor">
              <i class="fa fa-envelope icon"></i> 
              <span>Kontakt</span>
              </a>
    </li>
    <li>    

              <a href="contact" class="item"><i class="university icon"></i> Kontakt</a>
    </li>



  </ul>


<nav class="un_nav3 un_flex un_flex_hs">
    <a>Ustawienia: </a>
    <a href="{{URL::to('ustawienia')}}" class="item"><i class="fa fa-cogs icon"></i> Wszystkie ustawienia</a>



</nav>

  <section class="footer-bottom-section ">
<div class="footer-bottom-wrapper">   
<i class="fa fa-copyright" role="copyright">
 
</i> <?php
        $copyYear = 2006;
        $curYear = date('Y');
        echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
    ?> Chiny.pl <span class="footer-bottom-rights"> - Wszystkie prawa zastrzeżone - </span>
    </div>

  </section>



</footer>
