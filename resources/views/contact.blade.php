  @extends('layouts.app')

  @section('content')
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
  @endsection
