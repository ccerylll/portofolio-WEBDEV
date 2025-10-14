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
        </div>
    </nav>

    <div class="md:hidden">☰</div>
    </div>
</header>