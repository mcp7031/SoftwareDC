<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>SoftwareDC</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

	<!-- Scripts -->
	<!-- Link to Tailwind CSS CDN -->
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- link for production -->
	<!-- <link href="resources/css/output.css" rel="stylesheet"> -->
	<!-- Stylesheet -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	@livewireStyles

</head>
    <body>
        <div class="bg-[url('/images/DCLanding.jpg')] flex flex-col bg-fixed items-center justify-center h-screen text-gray-700">
            <p class="text-6xl font-mono font-light text-white">SoftwareDC</p>
@include('partials.nav')
            <p class="text-3xl text-white">Software Engineer. Cloud Practicioner.</p>
            <p class="text-2xl text-white">API and Full Stack Website Development </p>
            <p class="text-2xl text-white">Commercial Real Estate Ecosystem</p>
        </div>
    </body>
</html>
@livewireScripts
