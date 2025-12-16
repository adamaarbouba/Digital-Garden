<!DOCTYPE html>
<html lang="en" class="bg-[#212224] font-AveriaSerifLibre">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Digital Garden is a web application for taking themed notes" />
    <link rel="stylesheet" href="public/css/output.css" />
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Belanosima:wght@400;600;700&family=Nova+Round&display=swap" rel="stylesheet">
    <title>Digital Garden</title>
</head>

<body class="bg-[#212224] min-h-screen flex flex-col antialiased selection:bg-[#066839] selection:text-white">
    <?php include 'includes/header.php' ?>

    <main class="grow mt-20 max-w-7xl mx-auto p-6 pb-12 w-full">

        <section class="mb-20 text-center">
            <div class="relative w-full h-auto mb-12 overflow-hidden rounded-3xl shadow-2xl ring-1 ring-white/10 group">
                <img class="w-full object-cover transition-transform duration-250 group-hover:scale-105"
                    src="public/css/Digital Garden Hero Section.png"
                    alt="Digital Garden Hero"
                    style="max-height: 600px;">
                <div class="absolute inset-0 bg-black/10 pointer-events-none"></div>
            </div>

            <div class="max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-gray-50 mb-6 leading-tight">
                    Cultivate Your Ideas into a <span class="text-[#2d8a5d]">Digital Garden</span>
                </h1>

                <p class="text-xl text-gray-400 mb-10 leading-relaxed font-light">
                    A minimalist, private space built with PHP 8 and Tailwind to grow, organize, and explore your thoughts with vibrant custom themes and powerful note-taking.
                </p>

                <a href="/register" class="inline-flex items-center text-lg font-medium px-8 py-4 rounded-full transition-all duration-300
                bg-[#066839] text-gray-50 border border-[#0A5C36] 
                hover:bg-[#08522e] hover:shadow-[0_0_30px_-5px_rgba(6,104,57,0.6)] hover:-translate-y-1">
                    Start Planting Your First Note
                    <svg class="w-5 h-5 ms-2 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </section>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">

            <a href="#" class="bg-[#1D2E28] border border-white/5 p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 w-full flex flex-col justify-center md:col-span-1 lg:col-span-2 group">
                <h3 class="mb-4 text-3xl font-bold text-gray-100 group-hover:text-white transition-colors">Your Private Space to Grow Ideas</h3>

                <p class="mb-8 text-gray-400 leading-relaxed font-light">
                    <span class="text-xl font-medium text-[#4ade80]">Digital Garden</span> offers a dedicated, minimalist platform. Create private <span class="text-[#4ade80]">Notes</span> categorized by vibrant <span class="text-[#4ade80]">Themes</span> to keep your intellectual landscape structured.
                </p>

                <div class="mt-auto">
                    <button type="button" class="inline-flex items-center justify-center w-auto text-white bg-[#066839] border border-[#0A5C36]
                    shadow-md shadow-green-900/20 font-medium rounded-2xl text-sm px-6 py-3 
                    transition-all duration-300 hover:shadow-lg hover:shadow-green-900/40 hover:scale-[1.02]">
                        Start Cultivating Now
                        <svg class="w-4 h-4 ms-2 opacity-70" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </button>
                </div>
            </a>

            <a href="#" class="md:col-span-1 lg:col-span-2 group relative h-full">
                <img class="object-cover w-full rounded-3xl h-full min-h-[300px] shadow-lg shadow-black/20 
                    ring-1 ring-white/10 opacity-90 group-hover:opacity-100 group-hover:scale-[1.01] group-hover:shadow-2xl transition-all duration-500 ease-out"
                    src="https://imgs.search.brave.com/otk_ydYTuFn0wILEZ_IR36qALOF4HpqpwFfH7YkI7QU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9waG90/b3MzLndhbG1hcnQu/Y29tL2Ntcy9hc3Nl/dC85ODQyMDBmNDM1/Y2YzOTc3ZWFjOGVk/ODQ0Mzk3MGFmNS53/ZWJwP3Jldj0x"
                    alt="Minimalist note taking">
            </a>

            <a href="#" class="md:col-span-1 lg:col-start-1 lg:col-span-2 lg:order-3 group relative h-full">
                <img class="object-cover w-full rounded-3xl h-full min-h-[300px] shadow-lg shadow-black/20 
                    ring-1 ring-white/10 opacity-90 group-hover:opacity-100 group-hover:scale-[1.01] group-hover:shadow-2xl transition-all duration-500 ease-out"
                    src="https://imgs.search.brave.com/BN0LwEsBaifhOMPcEWBs3dAF3yM_nxZqaYOOn6ZlwwI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/Y29sb3Jpay5jb20v/aW1hZ2VzLW8vaW1h/Z2VzL2NvbG9yLXdo/ZWVsLWFuZC1jcmVh/dGl2ZS10b3VjaC5q/cGc"
                    alt="Creative tools">
            </a>

            <a href="#" class="bg-[#1D2E28] border border-white/5 p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 w-full flex flex-col justify-center md:col-span-1 lg:col-span-2 lg:order-4 group">
                <h3 class="mb-4 text-3xl font-bold text-gray-100 group-hover:text-white transition-colors">Build your own Custom Themes</h3>

                <p class="mb-8 text-gray-400 leading-relaxed font-light">
                    Tailor your Digital Garden to your exact needs. Easily create and personalize <span class="text-[#4ade80]">Themes</span> with custom colors, and write <span class="text-[#4ade80]">Notes</span> with rich text formatting to make your private space your own.
                </p>

                <div class="mt-auto">
                    <button type="button" class="inline-flex items-center justify-center w-auto text-white bg-[#066839] border border-[#0A5C36]
                    shadow-md shadow-green-900/20 font-medium rounded-2xl text-sm px-6 py-3 
                    transition-all duration-300 hover:shadow-lg hover:shadow-green-900/40 hover:scale-[1.02]">
                        Customize Your Garden
                        <svg class="w-4 h-4 ms-2 opacity-70" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </button>
                </div>
            </a>
        </div>
    </main>
    <?php include 'includes/footer.php' ?>
</body>

</html>