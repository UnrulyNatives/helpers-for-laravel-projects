<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="_____">
    <meta name="author" content="_____">

    <title>{{@$title }} -- _____</title>

    <!-- Link to CSS -->
    <link rel="stylesheet" href="{{URL::to('/css/wing.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('/css/adjustments_wing.css')}}"/>


  </head>

  <body>
      @include('navs.nav_main')



    <section id="installation" class="container center">

    @yield('content')
    </section>

@if(Auth::check() && Auth::user()->hasRole('Admin'))
  <div class="un_feedback admin">
    <h1>Poniżej tylko dla adminów (nie licząc footera</h1>

  </div>


    <section class="hero container center text-center">
      <div>
        <img src="./img/logo.png" alt="Wing Logo" height="125">
        <h3>Wing</h3>
        <h5>A beautiful CSS framework designed for minimalists.</h5>
      </div>
    </section>


    <section id="features" class="container center">
      <div>
        <h3 class="header">FEATURES</h3>
        <div class="row">
          <div class="col">
            <h5 class="text-center">Intuitive</h5>
            <p class="content">All you have to do is drop Wing into your project, and everything will be styled automatically. There is a minimal amount of classes to learn.</p>
          </div>
          <div class="col">
            <h5 class="text-center">Lightweight</h5>
            <p class="content">Wing comes packed with features, including styling for most elements, a grid, and some components, all in just <strong>5kb.</strong></p>
          </div>
          <div class="col">
            <h5 class="text-center">Beautiful</h5>
            <p class="content">The styles that come with Wing are clean and modern, dropping it into your project will give you a headstart in design.</p>
          </div>
        </div>
      </div>
    </section>


    <section id="installation" class="container center">
      <div>
        <h3 class="header">INSTALLATION</h3>
        <p class="content">You can install Wing in multiple ways, but it's as simple as adding a single <code>link</code> tag to your project.</p>

        <h5>CDN</h5>
        <pre><code>&lt;link rel=&quot;stylesheet&quot; href=&quot;https://unpkg.com/wingcss&quot;/&gt;</code></pre>

        <h5>NPM</h5>
        <pre><code>$ npm install wingcss</code></pre>
      </div>
    </section>

    <section id="guide" class="container center">
      <div>
        <h3 class="header">GUIDE</h3>
        <p class="content">Here is a guide of all the things styled by Wing, how to use the grid, and how to use some components.</p>
        <div class="guide-section">
          <h3 class="header">TYPOGRAPHY</h3>
          <p class="content">Wing styles based on <code>rem</code> units. All <code>rem</code> units are converted to base 10, so <code>1rem</code> is equal to <code>10px</code>. By default, all headings, paragraphs, and code use system fonts, using the most modern one available on a user's operating system.</p>
          <div class="row">
            <div class="col">
              <h1>H1 Heading</h1>
              <h2>H2 Heading</h2>
              <h3>H3 Heading</h3>
              <h4>H4 Heading</h4>
              <h5>H5 Heading</h5>
              <h6>H6 Heading</h6>
            </div>
            <div class="col">
              <p>Paragraph</p>
              <p><strong>Bold</strong></p>
              <p><i>Italic</i></p>
              <a href="#">Links</a>
            </div>
          </div>
        </div>

        <div class="guide-section">
          <h3 class="header">GRID</h3>
          <p class="content">Wing comes with a minimal, 960px, 12 column grid, with intuitive class names.</p>
          <div id="grid-demo"><button m-on:click="add">Add Column</button> <button m-on:click="remove">Remove Column</button><div class="row"><div class="col grid-demo-col center" m-for="col in cols"><p></p></div></div><div class="row"><div class="col"><pre><code>&lt;div class="row"&gt;
<span m-for="col in cols">
  &lt;div class="col"&gt;&lt;/div&gt;
</span>
&lt;/div&gt;</code></pre></div></div></div>
          <p class="content">Alternatively, you can use the <code>col-1</code>-<code>col-12</code> classes.</p>
        </div>

        <div class="guide-section">
          <h3 class="header">BUTTONS</h3>
          <p class="content">Wing styles buttons with two main styles, filled and outlined. These styles can easily be overwritten, and are there to provide a base for buttons.</p>
          <div class="row">
            <div class="col">
              <button>Default Button</button>
            </div>
            <div class="col">
              <p>This button is available by default, available with:</p><code>&lt;button&gt;Content&lt;/button&gt;</code>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <button class="outline">Outlined Button</button>
            </div>
            <div class="col">
              <p>This button is available with a single class, available with:</p><code>&lt;button class='outline'&gt;Content&lt;/button&gt;</code>
            </div>
          </div>
        </div>

        <div class="guide-section">
          <h3 class="header">FORMS</h3>
          <p class="content">Wing styles all common form elements with basic, clean styles.</p>
          <div class="row">
            <div class="col">
              <label>Name</label>
              <input type="text" placeholder="John Doe"/>
            </div>
            <div class="col">
              <label>Type</label>
              <select name="type">
                <option value="message">Message</option>
                <option value="feature">Feature</option>
                <option value="report">Report</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label>Message</label>
              <textarea placeholder="Greetings..."></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <pre><code>&lt;input type=&quot;text&quot; placeholder=&quot;What is your name?&quot;/&gt;
&lt;input type=&quot;email&quot; placeholder=&quot;What is your email?&quot;/&gt;
&lt;textarea placeholder=&quot;Additional details...&quot;&gt;&lt;/textarea&gt;</code></pre>
            </div>
          </div>
        </div>

        <div class="guide-section">
          <h3 class="header">NAVIGATION</h3>
          <p class="content">Wing comes with a simple, customizable navigation component.</p>
          <div class="nav">
            <h5 class="nav-logo">Logo</h5>
            <a class="nav-item" href="#">Item</a>
            <a class="nav-item" href="#">Item</a>
            <a class="nav-item" href="#">Item</a>
          </div>
          <pre><code>&lt;div class=&quot;nav&quot;&gt;
  &lt;h5 class=&quot;nav-logo&quot;&gt;Logo&lt;/h5&gt;
  &lt;a class=&quot;nav-item&quot; href=&quot;#&quot;&gt;Item&lt;/a&gt;
  &lt;a class=&quot;nav-item&quot; href=&quot;#&quot;&gt;Item&lt;/a&gt;
  &lt;a class=&quot;nav-item&quot; href=&quot;#&quot;&gt;Item&lt;/a&gt;
&lt;/div&gt;</code></pre>
          <p>All items have a class of <code>nav-item</code>, and an optional logo with the class of <code>nav-logo</code> can be added. Combined with utilities (below) such as <code>fixed</code>, <code>left</code>, <code>right</code>, or <code>center</code>, a navigation can be customized to your needs.</p>
        </div>

        <div class="guide-section">
          <h3 class="header">CARDS</h3>
          <p class="content">Wing comes with a sleek card component.</p>
          <div class="cards">
            <div class="card">
              <h5 class="card-header">Header</h5>
              <p class="card-body">Here is some content for a beautiful card made with the Wing CSS framework. A card can be within multiple <code>.cards</code> for a card-based responsive interface.</p>
              <div class="card-footer center text-center"><p><a href="#">Footer Link</a></p></div>
            </div>
            <div class="card">
              <h5 class="card-header">Header</h5>
              <p class="card-body">Here is some content for a beautiful card made with the Wing CSS framework. A card can be within multiple <code>.cards</code> for a card-based responsive interface.</p>
              <div class="card-footer center text-center"><p><a href="#">Footer Link</a></p></div>
            </div>
          </div>
          <pre><code>&lt;div class=&quot;cards&quot;&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;h5 class=&quot;card-header&quot;&gt;Header&lt;/h5&gt;
    &lt;p class=&quot;card-body&quot;&gt;Content&lt;/p&gt;
    &lt;div class=&quot;card-footer center text-center&quot;&gt;&lt;p&gt;Footer&lt;/p&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;h5 class=&quot;card-header&quot;&gt;Header&lt;/h5&gt;
    &lt;p class=&quot;card-body&quot;&gt;Content&lt;/p&gt;
    &lt;div class=&quot;card-footer center text-center&quot;&gt;&lt;p&gt;Footer&lt;/p&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <div class="guide-section">
          <h3 class="header">UTILITIES</h3>
          <p class="content">Wing provides some basic utility classes to speed up development.</p>
          <ul>
            <li><code>text-center</code> - center align text</li>
            <li><code>center</code> - align items within element in the center</li>
            <li><code>horizontal-align</code> - horizontally align an element</li>
            <li><code>vertical-align</code> - vertical align an element</li>
            <li><code>left</code> - align children to the left</li>
            <li><code>right</code> - align children to the right</li>
            <li><code>full-screen</code> - make element full screen</li>
            <li><code>fixed</code> - make element full width and fixed</li>
            <li><code>hide-phone</code> - hide elements on a phone</li>
            <li><code>hide-tablet</code> - hide elements on a tablet</li>
          </ul>
        </div>
      </div>
    </section>

<h2>KONIEC SEGMENTU ADMINA</h2>

@endif


    @include('segments.footer_1')





        <!-- this loads CDNJS or local files depending on environment -->
        @if( \App::environment() == 'local')
            @include('unstarter.layouts.files_local')
            @include('unstarter.layouts.files_local_wing')
            @include('unstarter.layouts.files_local_select2')
        @else
            @include('unstarter.layouts.files_cdnjs')
            @include('unstarter.layouts.files_cdnjs_wing')
            @include('unstarter.layouts.files_cdnjs_select2')
        @endif
    <script src="./js/lib/moon.min.js"></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>
