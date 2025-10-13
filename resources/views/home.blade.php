
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My Portfolio — Monochrome</title>
			@if (file_exists(public_path('mix-manifest.json')))
				<link rel="stylesheet" href="{{ mix('css/app.css') }}">
			@else
				@vite(['resources/css/app.css', 'resources/js/app.js'])
			@endif
			<style>
				/* Color tokens to match the reference monochrome palette */
				:root{
					--bg-dark: #1f201f;       /* page background */
					--panel:   #1b1b1b;       /* right hero panel */
					--nav-bg:  rgba(46,46,46,0.9); /* navigation overlay */
					--muted:   #bdbdbd;       /* muted copy */
					--accent:  #efefef;       /* light accents / divider */
				}
				.hero-title { letter-spacing: -0.02em; }
			</style>
				<style>
					/* typing cursor */
					#typing-cursor{ display:inline-block; margin-left:4px; color:var(--muted); animation: blink 1s step-start infinite; }
					@keyframes blink{ 50%{ opacity:0; } }
				</style>
	</head>
		<body class="antialiased text-white" style="background: var(--bg-dark);">
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
			<header class="absolute top-0 left-0 right-0 z-20 backdrop-blur-sm" style="background: var(--nav-bg);">
					<div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
						<a href="/" class="flex items-center gap-3 text-sm">
							<div class="w-8 h-8 bg-white/10 rounded flex items-center justify-center text-sm font-medium">CC</div>
							<span class="text-sm">Cherryl Callista</span>
						</a>

						<nav class="hidden xl:flex items-center gap-8 text-sm" style="color:var(--muted)">
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
							</div>

							<div class="inline-flex flex-col items-center text-sm">
								<a href="/contact" class="hover:text-white inline-block">Contact</a>
							</div>
						</nav>

						<div class="flex items-center gap-4">
							<div class="hidden xl:block">
								<a href="#" class="text-sm text-gray-300 hover:text-white">Menu</a>
							</div>
							<button class="xl:hidden p-2 text-gray-300" aria-label="menu">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
								</svg>
							</button>
						</div>
					</div>
				</header>

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

		{{-- Optional small script area --}}
			<script>
				// placeholder for interactivity (e.g., play video modal)
				document.addEventListener('click', function(e){
					// add behaviors later if needed
				});

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
							// stop cursor blink after finishing
							cursor.style.opacity = '0';
						}
					}
					// start typing after slight delay
					setTimeout(type, 800);
				})();
			</script>
	</body>
</html>
