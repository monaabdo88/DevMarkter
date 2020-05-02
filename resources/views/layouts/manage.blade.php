<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DevMarketer - MANAGEMENT</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
  @include('_includes.nav.main')
      <div class="columns dashboard-index">
        <div class="column dashboard-aside p-l-25  p-t-50 p-b-50">
          @include('_includes.nav.manage')
        </div>
          <div class="column dashboard-content is-four-fifths p-r-25  p-t-50 p-b-50" style="background-color:#e8e6a6">
            <div id="app">
              @yield('content')
            </div>
          </div>
      </div>
    
    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>Tech News</strong> by <a href="https://mona-abdo.com">Monaabdo</a>.
        </p>
      </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
