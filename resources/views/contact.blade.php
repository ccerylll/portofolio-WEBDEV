<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact — Cherryl Callista</title>
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
  <body class="antialiased" style="background:var(--bg-dark); color:#fff;">
    <header class="absolute top-0 left-0 right-0 z-20 backdrop-blur-sm" style="background:var(--nav-bg);">
      <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="{{ url('/') }}" class="flex items-center gap-3 text-sm">
          <div class="w-8 h-8 bg-white/10 rounded flex items-center justify-center text-sm font-medium">CC</div>
          <span class="text-sm">Cherryl Callista</span>
        </a>

        <nav class="hidden md:flex gap-6 text-sm text-gray-300">
          <div class="inline-flex flex-col items-center text-sm">
            <a href="{{ url('/') }}" class="hover:text-white inline-block">Home</a>
          </div>
          <div class="inline-flex flex-col items-center text-sm">
              <a href="/blog" class="hover:text-white inline-block">Blog</a>
          </div>
          <div class="inline-flex flex-col items-center text-sm">
            <a href="/about" class="hover:text-white inline-block">About Me</a>
          </div>
          <div class="inline-flex flex-col items-center text-sm">
            <a href="/contact" class="hover:text-white inline-block">Contact</a>
              <span class="mt-1 h-0.5 w-full bg-white rounded"></span>
          </div>
        </nav>

        <div class="md:hidden">☰</div>
      </div>
    </header>

    <div class="max-w-7xl mx-auto px-6 py-20 pt-24">
      <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
        <div class="pt-12 lg:pt-24">

          <h2 class="mt-8 text-4xl font-extrabold text-center">Get in touch</h2>
          <div class="w-16 h-0.5 mx-auto mt-4 mb-6" style="background:var(--muted)"></div>

          <p class="text-center text-gray-300 max-w-lg mx-auto">I'm open to collaborating on projects, freelance work, or just a friendly chat about design and development. Drop a message and I'll get back to you.</p>

          <div class="mt-8 text-center">
            <div class="inline-flex items-center gap-6" style="color:var(--muted)">
              <a href="#" class="block hover:opacity-90" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <img src="/image/instagram.png" alt="Instagram" class="w-8 h-8 object-contain" style="filter: invert(100%) brightness(120%);" />
              </a>
              <a href="#" class="block hover:opacity-90" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                <img src="/image/github.png" alt="GitHub" class="w-8 h-8 object-contain filter grayscale opacity-90" />
              </a>
              <a href="#" class="block hover:opacity-90" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                <img src="/image/linkedin.jpg" alt="LinkedIn" class="w-8 h-8 object-contain filter grayscale opacity-90" />
              </a>
            </div>
          </div>
        </div>

        <div class="prose prose-invert text-gray-200 max-w-none">
          <div class="max-w-2xl mx-auto bg-transparent p-6 rounded">
            <form action="#" method="POST" class="space-y-4">
              {{-- Note: replace action with your form handler or use Laravel route+csrf when integrating --}}
              <div>
                <label for="name" class="block text-sm text-gray-300">Name</label>
                <input id="name" name="name" class="mt-1 w-full bg-transparent border border-gray-700 rounded px-3 py-2 text-white focus:outline-none focus:ring-0 focus:border-gray-500" />
              </div>

              <div>
                <label for="email" class="block text-sm text-gray-300">Email</label>
                <input id="email" name="email" type="email" class="mt-1 w-full bg-transparent border border-gray-700 rounded px-3 py-2 text-white focus:outline-none focus:ring-0 focus:border-gray-500" />
              </div>

              <div>
                <label for="message" class="block text-sm text-gray-300">Message</label>
                <textarea id="message" name="message" rows="6" class="mt-1 w-full bg-transparent border border-gray-700 rounded px-3 py-2 text-white focus:outline-none focus:ring-0 focus:border-gray-500"></textarea>
              </div>

              <div class="flex items-center gap-4">
                <button type="submit" class="px-6 py-3 bg-white text-gray-900 font-medium rounded-sm">Send Message</button>
                <button type="reset" class="px-4 py-2 border border-gray-600 text-gray-300 rounded">Reset</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
