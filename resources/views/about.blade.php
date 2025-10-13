
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
        --muted: #bdbdbd;
        --nav-bg: rgba(46,46,46,0.9);
      }
    </style>
  </head>
  <body class="antialiased" style="background:var(--bg-dark); color: #fff;">
    <!-- Full-width navbar (overlay) -->
    <header class="absolute top-0 left-0 right-0 z-20 backdrop-blur-sm" style="background:var(--nav-bg);">
      <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="{{ url('/') }}" class="flex items-center gap-3 text-sm">
          <div class="w-8 h-8 bg-white/10 rounded flex items-center justify-center text-sm font-medium">CC</div>
          <span class="text-sm">Cherryl Callista</span>
        </a>

        <nav class="hidden md:flex gap-6 text-sm text-gray-300">
          <div class="inline-flex flex-col items-center text-sm">
            <a href="{{ url('/') }}" class="hover:text-white inline-block">Home</a>
            @if(url()->current() == url('/'))
              <span class="mt-1 h-0.5 w-full bg-white rounded"></span>
            @endif
          </div>

          <div class="inline-flex flex-col items-center text-sm">
            <a href="/blog" class="hover:text-white inline-block">Blog</a>
          </div>

          <div class="inline-flex flex-col items-center text-sm">
            <a href="/about" class="hover:text-white inline-block">About Me</a>
              <span class="mt-1 h-0.5 w-full bg-white rounded"></span>
          </div>

          <div class="inline-flex flex-col items-center text-sm">
            <a href="/contact" class="hover:text-white inline-block">Contact</a>
          </div>
        </nav>

        <div class="md:hidden">☰</div>
      </div>
    </header>

    <div class="max-w-7xl mx-auto px-6 py-12 pt-20">

      <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
        <div>
          <img src="/image/aboutpict.jpg" alt="About" class="w-full max-w-lg mx-auto h-auto object-cover grayscale border border-gray-700 mt-12 lg:mt-20">

            <h2 class="mt-6 text-4xl font-extrabold text-center">About Me</h2>
            <div class="w-16 h-0.5 mx-auto mt-3 mb-6" style="background:var(--muted)"></div>

    
          <div class="mt-6 text-center">
            <div class="inline-flex items-center gap-6" style="color:var(--muted)">
              <a href="#" class="block hover:opacity-90" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <img src="/image/instagram.png" alt="Instagram" class="w-8 h-8 object-contain" style="filter: invert(100%) brightness(120%);" />
              </a>

              <a href="#" class="block hover:opacity-90" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                <img src="/image/github.png" alt="GitHub" class="w-8 h-8 object-contain filter grayscale opacity-90 -translate-y-0.5" style="transform: translateY(-2px);" />
              </a>

              <a href="#" class="block hover:opacity-90" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                <img src="/image/linkedin.jpg" alt="LinkedIn" class="w-8 h-8 object-contain filter grayscale opacity-90" />
              </a>
            </div>
          </div>
        </div>

        <div class="prose prose-invert text-gray-200 max-w-none">
          <div class="text-center mt-12 lg:mt-16">
            <h3 class="text-3xl font-bold">Hello!</h3>
            <h4 class="text-2xl font-semibold mt-2">here's who i am and what i do</h4>
          </div>

          <p class="mt-12 mb-6">Hi, I'm Cherryl Callista, an Application Development student and aspiring UI/UX Designer who loves crafting digital experiences that are both beautiful and functional.</p>

          <p class="mb-6">My passion lies in turning ideas into interactive designs — from mobile apps to responsive websites — that feel intuitive, visually balanced, and meaningful for users.</p>

          <p class="mb-6">I believe design isn't just about how something looks, but how it works, feels, and guides users seamlessly through their goals.</p>

          <p class="mb-6">Whether it's wireframing, prototyping, or experimenting with motion and micro-interactions, I enjoy exploring every step of the creative process. My goal is simple: to design products that leave a lasting impression — experiences that people not only use, but truly enjoy.</p>
        </div>
      </section>
    </div>
  </body>
</html>
