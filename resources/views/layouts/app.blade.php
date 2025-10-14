<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About — Cherryl Callista</title>
    @if (file_exists(public_path('mix-manifest.json')))
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @else
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <style>
      :root{
        --bg-dark: #222222;
        --panel: #1b1b1b;
        --muted: #bdbdbd;
        --nav-bg: rgba(46,46,46,0.9);
        --accent: #efefef;
      }
      .hero-title{ letter-spacing: -0.02em; }
    </style>
    @stack('styles')
  </head>

  <body class="antialiased" style="background:var(--bg-dark); color:#fff;">
    @include('partials.navbar')

    <main>
      @yield('content')
    </main>

    @stack('scripts')
  </body>
</html>