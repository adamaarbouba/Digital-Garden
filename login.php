<!DOCTYPE html>
<html lang="en" class="bg-[#212224] font-AveriaSerifLibre">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Log in to your Digital Garden" />
    <link rel="stylesheet" href="public/css/output.css" />
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Belanosima:wght@400;600;700&family=Nova+Round&display=swap" rel="stylesheet">
    <title>Digital Garden</title>
</head>

<body class="bg-[#212224] min-h-screen flex flex-col antialiased selection:bg-[#066839] selection:text-white">
    <?php include 'includes/header.php' ?>
    <main class="grow flex items-center justify-center p-6 w-full">

        <div class="w-full max-w-md bg-[#1D2E28] rounded-3xl shadow-2xl ring-1 ring-white/5 p-8 md:p-10 relative overflow-hidden">

            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 rounded-full bg-[#066839] opacity-10 blur-3xl pointer-events-none"></div>

            <div class="relative z-10">
                <div class="text-center mb-10">
                    <h1 class="text-3xl font-bold text-gray-100 mb-2">Welcome Back</h1>
                    <p class="text-gray-400 font-light">Enter your garden to continue planting.</p>
                </div>
                <form action="includes/auth.php" method="POST" class="space-y-6">
                    <div class="space-y-2">
                        <label for="email" class="text-sm font-medium text-gray-300 ml-1">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                    <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                </svg>
                            </div>
                            <input type="email" name="email" id="email" required
                                class="block w-full ps-11 p-4 text-gray-100 bg-[#263530] border border-white/5 rounded-2xl 
                                placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#066839] focus:bg-[#212f2a] transition-all duration-300"
                                placeholder="name@example.com">
                        </div>
                        <span class="text-red-800 emailWarningMsg hidden">Email Is Not Valid</span>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center ml-1">
                            <label for="password" class="text-sm font-medium text-gray-300">Password</label>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                                    <path d="M14 7h-1.5V4.5a4.5 4.5 0 1 0-9 0V7H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-5 8a1 1 0 1 1-2 0v-3a1 1 0 1 1 2 0v3Zm1.5-8h-5V4.5a2.5 2.5 0 1 1 5 0V7Z" />
                                </svg>
                            </div>
                            <input type="password" name="password" id="password" required
                                class="block w-full ps-11 p-4 text-gray-100 bg-[#263530] border border-white/5 rounded-2xl 
                                placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#066839] focus:bg-[#212f2a] transition-all duration-300"
                                placeholder="••••••••">
                        </div>
                        <span class="text-red-800 passwordWarningMsg hidden">Password Is Not Valid</span>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-[#066839] border border-[#0A5C36] font-medium rounded-2xl text-lg px-5 py-4 text-center 
                        shadow-lg shadow-green-900/30 hover:bg-[#08522e] hover:shadow-green-900/50 hover:-translate-y-0.5 transition-all duration-300">
                        Sign In to Garden
                    </button>
                    <div class="text-sm font-light text-gray-400 text-center mt-6">
                        Don't have a space yet? <a href="/register.php" class="font-medium text-[#4ade80] hover:underline hover:text-white transition-colors">Create account</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include 'includes/footer.php' ?>
    <script src="public/js/LoginValidation.js"></script>
</body>

</html>