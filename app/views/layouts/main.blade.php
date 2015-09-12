<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Foundation | Welcome</title>
        <link rel="stylesheet" href="{{ asset('css/foundation.css') }}" />
        <script src="{{ asset('js/vendor/modernizr.js') }}"></script>
    </head>

<body>

    <!-- Header and Nav -->
    <header class="contain-to-grid fixed">
      <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
          <li class="name">
            <h1><a href="/">My Site</a></h1>
          </li>
           <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">
          <!-- Right Nav Section -->
          <ul class="right">
            <li><a href="/todos">Todo</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </section>
      </nav>
    </header>
 
    <!-- End Header and Nav -->
    @if( Session::has('message') )
      <div data-alert class="alert-box {{ Session::get('flash_type', 'secondary') }}">
        <p class="row text-center"><em>{{{ Session::get('message') }}}</em></p>
        <a href="#" class="close">&times;</a>
      </div>
    @endif

    @yield('content')
 
 
    <!-- Footer -->
 
    <footer class="row">
        <div class="large-12 columns">
            <hr />
            <div class="row">
                <div class="large-6 columns">
                    <p>© Team Treehouse</p>
                </div>
            </div>
        </div>
    </footer>

    {{ HTML::script('js/vendor/modernizr.js') }}
    {{ HTML::script('js/vendor/jquery.js') }}
    {{ HTML::script('js/foundation.min.js') }}
    <script>
      $(document).foundation();
      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>
    </body>
</html>