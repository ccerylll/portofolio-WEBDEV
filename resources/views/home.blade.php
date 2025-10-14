@extends('layouts.app')

@section('content')
<div class="min-h-screen flex overflow-hidden">
			<!-- Left: image with profile overlay -->
			<div class="w-1/2 hidden lg:block">
				<div class="h-screen w-full relative">
					<!-- Main background image -->
					<img src="/image/profilepict.jpg" alt="Hero" class="w-full h-full object-cover grayscale">
					<!-- Overlay: avatar + name stacked over the background -->
					<div class="absolute left-16 lg:left-24 xl:left-70 top-1/2 transform -translate-y-1/2 flex items-center gap-6">
						<div class="w-50 h-50 rounded-full border-4 border-white overflow-hidden shadow-lg">
							<img src="/image/profilepict.jpg" alt="Profile" class="w-full h-full object-cover">
						</div>
					</div>
				</div>
			</div>

			<!-- Right: dark panel -->
			<div class="w-full lg:w-1/2 relative flex flex-col" style="background: var(--panel);">
				<!-- Top nav (full width overlay) -->


						<!-- Hero content centered vertically on the right panel -->
				<main class="flex-1 flex items-center">
					<div class="max-w-5xl mx-auto px-6 py-24 lg:py-32 w-full">
						<div class="lg:pl-12">

							<div class="flex items-center gap-6">
								<h1 class="hero-title font-extrabold text-white text-6xl md:text-7xl lg:text-[120px] leading-tight">
									My<br>
									Portfolio
								</h1>
										<div class="hidden lg:block flex-1 ml-6 mr-12" style="border-top:1px solid var(--accent)"></div>
							</div>

									<p class="mt-6 text-sm max-w-md" style="color:var(--muted)"><span id="typed-text"></span><span id="typing-cursor">|</span></p>

							<div class="mt-10 flex items-center gap-6">
								<a href="#" class="inline-block px-6 py-3 bg-white text-gray-900 font-medium rounded-sm">Explore Now</a>

								<button class="flex items-center gap-3 text-gray-300">
									<span class="w-10 h-10 rounded-full border border-gray-400 flex items-center justify-center">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-200" viewBox="0 0 24 24" fill="currentColor">
											<path d="M8 5v14l11-7z" />
										</svg>
									</span>
									<span class="text-sm">Play Video</span>
								</button>
							</div>
						</div>
					</div>
				</main>

			</div>
		</div>

@endsection

@push('scripts')
<script>
	// Typing animation
	(function(){
		const text = "Hi, I'm Cherryl Callista, an Application Development student who loves turning ideas into beautiful and intuitive app designs.";
		const el = document.getElementById('typed-text');
		const cursor = document.getElementById('typing-cursor');
		let i = 0;
		const speed = 20; // ms per char
		function type(){
			if(i < text.length){
				el.textContent += text.charAt(i);
				i++;
				setTimeout(type, speed);
			} else {
				cursor.style.opacity = '0';
			}
		}
		setTimeout(type, 800);
	})();
</script>
@endpush
