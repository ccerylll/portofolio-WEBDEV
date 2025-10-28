@extends('layouts.app')

@section('content')
<div class="min-h-screen" style="background: var(--bg-dark);">
    <div class="max-w-7xl mx-auto px-6 py-24 lg:py-32">
        
        {{-- Hero Section --}}
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-4">My Projects</h1>
            <div class="w-24 h-1 mx-auto mb-6" style="background: var(--accent);"></div>
            <p class="text-gray-400 max-w-2xl mx-auto">
                A showcase of my recent work and creative projects
            </p>
        </div>

        {{-- Filter Tabs --}}
        <div class="flex justify-center gap-4 mb-12 flex-wrap">
            <button class="px-6 py-2 bg-white text-gray-900 rounded-sm font-medium">All</button>
            <button class="px-6 py-2 border border-gray-700 text-gray-300 rounded-sm hover:border-white transition-colors">Web</button>
            <button class="px-6 py-2 border border-gray-700 text-gray-300 rounded-sm hover:border-white transition-colors">Mobile</button>
            <button class="px-6 py-2 border border-gray-700 text-gray-300 rounded-sm hover:border-white transition-colors">Design</button>
        </div>

        {{-- Projects Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="bg-neutral-800/50 border border-gray-700 rounded overflow-hidden hover:border-gray-500 transition-all group">
                {{-- Project Image --}}
                <div class="relative overflow-hidden h-48 bg-gray-800">
                    <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover grayscale group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4">
                        @if($project->project_url)
                        <a href="{{ $project->project_url }}" target="_blank" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-gray-200 transition-colors">
                            <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                        @endif
                        @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-gray-200 transition-colors">
                            <svg class="w-5 h-5 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                            </svg>
                        </a>
                        @endif
                    </div>
                </div>

                {{-- Project Info --}}
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 bg-gray-700 text-xs text-gray-300 rounded-full">{{ ucfirst($project->category) }}</span>
                        @if($project->completed_at)
                        <span class="text-xs text-gray-500">{{ $project->completed_at->format('M Y') }}</span>
                        @endif
                    </div>

                    <h3 class="text-xl font-bold text-white mb-3">{{ $project->title }}</h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">{{ $project->description }}</p>

                    @if($project->tech_stack)
                    <div class="flex flex-wrap gap-2">
                        @foreach(explode(',', $project->tech_stack) as $tech)
                        <span class="text-xs text-gray-500 border border-gray-700 px-2 py-1 rounded">{{ trim($tech) }}</span>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

        {{-- Empty State --}}
        @if($projects->isEmpty())
        <div class="text-center py-20">
            <p class="text-gray-400">No projects found. Run <code class="bg-gray-800 px-2 py-1 rounded">php artisan db:seed</code> to create sample projects.</p>
        </div>
        @endif

        {{-- CTA Section --}}
        <div class="mt-20 text-center bg-neutral-800/30 border border-gray-700 rounded-lg p-12">
            <h3 class="text-3xl font-bold text-white mb-4">Have a Project in Mind?</h3>
            <p class="text-gray-400 mb-8 max-w-2xl mx-auto">
                I'm currently available for freelance work and collaborations. Let's discuss your ideas!
            </p>
            <a href="/contact" class="inline-block px-8 py-3 bg-white text-gray-900 font-medium rounded-sm hover:bg-gray-200 transition-colors">
                Start a Conversation
            </a>
        </div>

    </div>
</div>
@endsection
