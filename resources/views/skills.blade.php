@extends('layouts.app')

@section('content')
<div class="min-h-screen" style="background: var(--bg-dark);">
    <div class="max-w-7xl mx-auto px-6 py-24 lg:py-32">
        
        {{-- Hero Section --}}
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-4">Skills & Expertise</h1>
            <div class="w-24 h-1 mx-auto mb-6" style="background: var(--accent);"></div>
            <p class="text-gray-400 max-w-2xl mx-auto">
                A collection of technologies and tools I work with to bring ideas to life
            </p>
        </div>

        {{-- Skills Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mt-16">
            
            {{-- Technical Skills --}}
            <div>
                <h2 class="text-3xl font-bold text-white mb-8 flex items-center gap-3">
                    <span class="w-2 h-8" style="background: var(--accent);"></span>
                    Technical Skills
                </h2>
                
                <div class="space-y-6">
                    @foreach($technicalSkills as $skill)
                    <div class="bg-neutral-800/50 border border-gray-700 p-6 rounded hover:border-gray-500 transition-colors">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-semibold text-white flex items-center gap-2">
                                <span>{{ $skill->icon }}</span>
                                {{ $skill->name }}
                            </h3>
                            <span class="text-sm text-gray-400">{{ $skill->percentage }}%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2">
                            <div class="bg-white h-2 rounded-full transition-all duration-500" style="width: {{ $skill->percentage }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Design & Soft Skills --}}
            <div>
                <h2 class="text-3xl font-bold text-white mb-8 flex items-center gap-3">
                    <span class="w-2 h-8" style="background: var(--accent);"></span>
                    Design & Tools
                </h2>
                
                <div class="space-y-6">
                    @foreach($designSkills as $skill)
                    <div class="bg-neutral-800/50 border border-gray-700 p-6 rounded hover:border-gray-500 transition-colors">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-semibold text-white flex items-center gap-2">
                                <span>{{ $skill->icon }}</span>
                                {{ $skill->name }}
                            </h3>
                            <span class="text-sm text-gray-400">{{ $skill->percentage }}%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2">
                            <div class="bg-white h-2 rounded-full transition-all duration-500" style="width: {{ $skill->percentage }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Tools & Technologies --}}
        <div class="mt-20">
            <h2 class="text-3xl font-bold text-white mb-8 text-center flex items-center justify-center gap-3">
                <span class="w-2 h-8" style="background: var(--accent);"></span>
                Tools & Technologies
            </h2>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 mt-12">
                @foreach($tools as $tool)
                <div class="bg-neutral-800/50 border border-gray-700 p-6 rounded text-center hover:border-white transition-colors group">
                    <div class="text-4xl mb-3">{{ $tool->icon }}</div>
                    <p class="text-sm text-gray-300 mb-2">{{ $tool->name }}</p>
                    <p class="text-xs text-gray-500 group-hover:text-gray-400">{{ $tool->percentage }}%</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- CTA Section --}}
        <div class="mt-20 text-center bg-neutral-800/30 border border-gray-700 rounded-lg p-12">
            <h3 class="text-3xl font-bold text-white mb-4">Let's Work Together</h3>
            <p class="text-gray-400 mb-8 max-w-2xl mx-auto">
                I'm always interested in hearing about new projects and opportunities.
            </p>
            <a href="/contact" class="inline-block px-8 py-3 bg-white text-gray-900 font-medium rounded-sm hover:bg-gray-200 transition-colors">
                Get In Touch
            </a>
        </div>

    </div>
</div>
@endsection
