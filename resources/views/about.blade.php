<!-- resources/views/modal.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftwareDC</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">SoftwareDC</h2>
        <button @click="open = true" class="bg-blue-500 text-white px-4 py-2 rounded">Open Modal</button>

        <!-- Modal -->
        <div x-data="{ open: false }">
            <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <div class="bg-white p-6 rounded shadow-lg relative">
                    <button @click="open = false" class="absolute top-2 right-2 text-gray-700">&times;</button>
                    <h3 class="text-xl font-bold mb-4">SoftwareDC</h3>
                    <p class="mb-4">My name is David Allen. I am the principle at SoftwareDC, a startup enterprise developing an API for the Commercial Real Estate (CRE) envionment. We also build websites using the TALL stack.</p>
                    <button @click="open = false" class="bg-blue-500 text-white px-4 py-2 rounded">Close</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

