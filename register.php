<!DOCTYPE html>
<html lang="en" class="bg-[#212224] font-AveriaSerifLibre">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Create your Digital Garden account" />
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Belanosima:wght@400;600;700&family=Nova+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/output.css" />
    <title>Digital Garden</title>
</head>

<body class="bg-[#212224] min-h-screen flex flex-col antialiased selection:bg-[#066839] selection:text-white">

    <?php include 'includes/header.php' ?>

    <main class="grow flex items-center justify-center p-6 w-full my-8">

        <div class="w-full max-w-lg bg-[#1D2E28] rounded-3xl shadow-2xl ring-1 ring-white/5 p-8 md:p-10 relative overflow-hidden">

            <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-64 h-64 rounded-full bg-[#066839] opacity-10 blur-3xl pointer-events-none"></div>

            <div class="relative z-10">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-100 mb-2">Plant Your Seeds</h1>
                    <p class="text-gray-400 font-light">Join Digital Garden and start cultivating your ideas.</p>
                </div>

                <form action="logic/register_handler.php" method="POST" class="space-y-5">

                    <div class="space-y-2">
                        <label for="fullname" class="text-sm font-medium text-gray-300 ml-1">Full Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" name="fullname" id="fullname" required
                                class="block w-full ps-11 p-4 text-gray-100 bg-[#263530] border border-white/5 rounded-2xl 
                                placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#066839] focus:bg-[#212f2a] transition-all duration-300"
                                placeholder="Full Name">
                        </div>
                    </div>

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
                                placeholder="Email@example.com">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="space-y-2">
                            <label for="password" class="text-sm font-medium text-gray-300 ml-1">Password</label>
                            <input type="password" name="password" id="password" required
                                class="block w-full p-4 text-gray-100 bg-[#263530] border border-white/5 rounded-2xl 
                                placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#066839] focus:bg-[#212f2a] transition-all duration-300"
                                placeholder="••••••••">
                        </div>

                        <div class="space-y-2">
                            <label for="confirm_password" class="text-sm font-medium text-gray-300 ml-1">Confirm</label>
                            <input type="password" name="confirm_password" id="confirm_password" required
                                class="block w-full p-4 text-gray-100 bg-[#263530] border border-white/5 rounded-2xl 
                                placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#066839] focus:bg-[#212f2a] transition-all duration-300"
                                placeholder="••••••••">
                        </div>
                    </div>



                    <button type="submit"
                        class="w-full text-white bg-[#066839] border border-[#0A5C36] font-medium rounded-2xl text-lg px-5 py-4 text-center 
                        shadow-lg shadow-green-900/30 hover:bg-[#08522e] hover:shadow-green-900/50 hover:-translate-y-0.5 transition-all duration-300 mt-2">
                        Create Account
                    </button>

                    <div class="text-sm font-light text-gray-400 text-center mt-6">
                        Already have a garden? <a href="login.php" class="font-medium text-[#4ade80] hover:underline hover:text-white transition-colors">Sign in here</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php' ?>

</body>

</html>