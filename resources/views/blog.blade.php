    @extends('layouts.app')

    @section('content')
    <div class="max-w-7xl mx-auto px-6 py-24 pt-28">
          <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-5xl font-extrabold">Blog</h1>
            <p class="mt-4 text-gray-300">Thoughts, case studies, and design notes — monochrome edition.</p>
          </div>

          <section class="grid grid-cols-1 lg:grid-cols-3 gap-12 mt-12">
            <div class="lg:col-span-2">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Placeholder posts — replace with dynamic loop (e.g., @foreach($posts as $post)) --}}
                @for ($i = 0; $i < 6; $i++)
                  @php $img = '/image/design' . (($i % 6) + 1) . '.svg'; @endphp
                  <article class="bg-neutral-800 border border-gray-700 rounded overflow-hidden">
                    <img src="{{ $img }}" alt="Post" class="w-full h-40 object-cover grayscale" />
                    <div class="p-4">
                      <h3 class="text-xl font-semibold">Sample Post Title {{ $i + 1 }}</h3>
                      <p class="mt-2 text-gray-300 text-sm">A short excerpt of the post to show how the card will look in the grid.</p>
                      <div class="mt-4 flex items-center justify-between">
                        <a href="#" class="text-sm text-gray-200 hover:underline">Read more →</a>
                        <span class="text-xs text-gray-400">Oct 2025</span>
                      </div>
                    </div>
                  </article>
                @endfor
              </div>

              {{-- Pagination placeholder --}}
              <div class="mt-8 flex items-center justify-center gap-4">
                <a href="#" class="px-3 py-2 border border-gray-700 rounded text-gray-300">Previous</a>
                <a href="#" class="px-3 py-2 bg-white text-gray-900 rounded">1</a>
                <a href="#" class="px-3 py-2 border border-gray-700 rounded text-gray-300">Next</a>
              </div>
            </div>

            <aside class="prose prose-invert text-gray-200">
              <div class="bg-transparent p-6 rounded border border-gray-700">
                <h4 class="text-lg font-semibold">About this blog</h4>
                <p class="mt-2 text-gray-300">Short description about the topics covered here: design, UI/UX, and development notes.</p>

                <div class="mt-6">
                  <h5 class="text-sm uppercase text-gray-400">Categories</h5>
                  <ul class="mt-2 space-y-2 text-gray-300">
                    <li><a href="#" class="hover:underline">Design</a></li>
                    <li><a href="#" class="hover:underline">Case Studies</a></li>
                    <li><a href="#" class="hover:underline">Tutorials</a></li>
                  </ul>
                </div>
              </div>
            </aside>
          </section>
        </div>
    @endsection
