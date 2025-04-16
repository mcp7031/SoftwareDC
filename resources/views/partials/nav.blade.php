<body class="px-2 py-4" hstyle="font-family:Open sans, sans-serif">
    <nav class="container mx-auto flex flex-col md:flex-row justify-between items-center">
        <div x-data="{ open: false }" class="shadow-md p-4">

            <button @click="open = !open" class="text-gray-500 px-2">
                <svg x-show="!open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div x-show="open">
                <ul class="rounded-md bg-gray-200 p-4">
                   @livewire('dropdown-modal')
                </ul>
            </div>
        </div>
        <div> Website under construction </div>
    </nav>
</body>
@livewireScripts

