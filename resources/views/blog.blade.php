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
                @forelse ($blogs as $index => $blog)
                  @php $img = '/image/design' . (($index % 6) + 1) . '.svg'; @endphp
                  <article class="bg-neutral-800 border border-gray-700 rounded overflow-hidden">
                    <img src="{{ $img }}" alt="{{ $blog->title }}" class="w-full h-40 object-cover grayscale" />
                    <div class="p-4">
                      <h3 class="text-xl font-semibold line-clamp-2">{{ $blog->title }}</h3>
                      <p class="mt-2 text-gray-300 text-sm line-clamp-3">{{ Str::limit($blog->content, 100) }}</p>
                      <div class="mt-4 flex items-center justify-between">
                        <span class="text-xs text-gray-400">By {{ $blog->author }}</span>
                        <span class="text-xs text-gray-400">{{ $blog->published_at->format('M Y') }}</span>
                      </div>
                    </div>
                  </article>
                @empty
                  <div class="col-span-2 text-center py-12">
                    <p class="text-gray-400">No blog posts yet. Run <code class="bg-gray-800 px-2 py-1 rounded">php artisan db:seed</code> to create sample posts.</p>
                  </div>
                @endforelse
              </div>

              {{-- Pagination --}}
              @if($blogs->hasPages())
              <div class="mt-8">
                {{ $blogs->links() }}
              </div>
              @endif
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
