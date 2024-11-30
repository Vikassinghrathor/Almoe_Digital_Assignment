<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Tailwind CSS for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Heroicons for additional visual elements -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/heroicons/2.0.18/heroicons.min.css">
</head>

<body>
    <!--Navbar-->
    <header>
        <nav class="bg-black">
            <div class="container mx-auto px-4 py-3 flex items-center justify-between lg:pl-[6rem] lg:pr-[6rem]">
                <div class="text-center p-2">
                    <a href="#" class="text-white font-bold text-xl hover:opacity-80">
                        <img src="{{ asset('images/almoe-logo-website-165x55.png') }}" alt="almoe_icon"
                            class="max-w-full h-auto block mx-auto" />
                    </a>
                </div>

                <div class="hidden lg:block">
                    <ul class="flex items-center space-x-6">
                        <li>
                            <a href="#" class="text-white text-lg hover:text-orange-400">Home</a>
                        </li>
                        <li>
                            <a href="#" class="text-white text-lg hover:text-orange-400">Our Products</a>
                        </li>
                        <li>
                            <a href="#" class="text-white text-lg hover:text-orange-400">Our Brands</a>
                        </li>
                        <li>
                            <a href="#" class="text-white text-lg hover:text-orange-400">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="text-orange-400 text-lg hover:text-orange-500">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="lg:hidden">
                    <button id="mobile-menu-toggle" class="text-white hover:text-orange-400 focus:outline-none">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu (Hidden by default) -->
            <div id="mobile-menu" class="lg:hidden hidden bg-black">
                <ul class="px-4 pt-2 pb-4 space-y-2">
                    <li><a href="#" class="block text-white hover:text-orange-400 py-2">Home</a></li>
                    <li><a href="#" class="block text-white hover:text-orange-400 py-2">Our Products</a></li>
                    <li><a href="#" class="block text-white hover:text-orange-400 py-2">Our Brands</a></li>
                    <li><a href="#" class="block text-white hover:text-orange-400 py-2">About Us</a></li>
                    <li><a href="#" class="block text-orange-400 hover:text-orange-500 py-2">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Form Section -->
    <main>
        <section class="bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center min-h-screen p-4">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                    <!-- Decorative Header -->
                    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-1 w-full"></div>

                    <div class="p-6 sm:p-8 sm:mt-4">
                        <div class="flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 sm:h-16 sm:w-16 text-indigo-600"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>

                        <h2 class="text-2xl sm:text-3xl font-extrabold text-center text-gray-800 mb-6">Create Account
                        </h2>

                        {{-- Success Message --}}
                        @if (session('success'))
                            <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-4" role="alert">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-green-700">{{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Error Message --}}
                        @if (session('error'))
                            <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-4" role="alert">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-red-700">{{ session('error') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form action="{{ route('register') }}" method="POST" class="space-y-6">
                            @csrf {{-- CSRF Token --}}

                            {{-- Name Field --}}
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-indigo-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Full Name
                                    </span>
                                </label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300
                            @error('name') border-red-500 @enderror"
                                    placeholder="Enter your full name" required>
                                @error('name')
                                    <p class="text-red-500 text-xs mt-2 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            {{-- Email Field --}}
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-indigo-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                        </svg>
                                        Email Address
                                    </span>
                                </label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300
                            @error('email') border-red-500 @enderror"
                                    placeholder="Enter your email" required>
                                @error('email')
                                    <p class="text-red-500 text-xs mt-2 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            {{-- Phone Number Field --}}
                            <div>
                                <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-2">
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-indigo-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.042 11.042 0 005.449 5.448l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                        </svg>
                                        Phone Number
                                    </span>
                                </label>
                                <input type="tel" id="phone_number" name="phone_number"
                                    value="{{ old('phone_number') }}"
                                    class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300
                            @error('phone_number') border-red-500 @enderror"
                                    placeholder="Enter 10-digit phone number" required>
                                @error('phone_number')
                                    <p class="text-red-500 text-xs mt-2 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1
        h1a1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            {{-- Submit Button --}}
                            <div>
                                <button type="submit"
                                    class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-2 sm:py-3 rounded-lg
                            hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                            transform hover:scale-105 transition duration-300 ease-in-out flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 mr-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Create Account
                                </button>
                            </div>
                        </form>

                        <div class="mt-6 text-center text-sm text-gray-600">
                            Already have an account?
                            <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium">
                                Sign in
                            </a>
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-1 w-full"></div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="bg-black text-white py-8">
        <div class="container mx-auto px-4 flex flex-col lg:flex-row justify-between lg:pl-[6rem] lg:pr-[6rem]">
            <div class="mb-6 lg:mb-0">
                <h2 class="text-lg font-bold text-[#f2a341] mb-2">Our Products</h2>
                <hr class="border-t-2 border-orange-500 w-16 mb-4">
                <ul>
                    <li class="mb-2 text-white hover:text-[#f2a341]">Interactive Panels</li>
                    <li class="mb-2 text-white hover:text-[#f2a341]">Video Walls</li>
                    <li class="mb-2 text-white hover:text-[#f2a341]">Kiosk</li>
                    <li class="mb-2 text-white hover:text-[#f2a341]">Interactive Touch Table</li>
                    <li class="mb-2 text-white hover:text-[#f2a341]">Active Floor</li>
                    <li class="mb-2 text-white hover:text-[#f2a341]">Podiums</li>
                </ul>
            </div>
            <div class="mb-6 lg:mb-0">
                <h2 class="text-lg font-bold text-[#f2a341] mb-2">Quick Links</h2>
                <hr class="border-t-2 border-orange-500 w-16 mb-4">
                <ul>
                    <li class="mb-2 text-white hover:text-[#f2a341]">Home</li>
                    <li class="mb-2 text-white hover:text-[#f2a341]">Contact</li>
                    <li class="mb-2 text-white hover:text-[#f2a341]">About Us</li>
                </ul>
            </div>
            <div class="mb-6 lg:mb-0">
                <h2 class="text-lg font-bold text-[#f2a341] mb-2">Follow Us</h2>
                <hr class="border-t-2 border-orange-500 w-16 mb-4">
                <div class="flex space-x-4">
                    <a href="#" class="text-blue-600"><i class="fab fa-linkedin fa-2x"></i></a>
                    <a href="#" class="text-pink-600"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#" class="text-red-600"><i class="fab fa-youtube fa-2x"></i></a>
                    <a href="#" class="text-blue-600"><i class="fab fa-facebook fa-2x"></i></a>
                </div>
            </div>
            <div class="flex flex-col items-start space-y-4">
                <button class="bg-orange-500 text-white py-2 px-4 rounded-full">REQUEST DEMO</button>
                <p>Email: indiasales@almoe.com</p>
                <p>Phone: +080-42249000</p>
            </div>
        </div>
        <div class="container mx-auto px-4 mt-8 text-center">
            <p>Copyright © 2024 <span class="text-[#f2a341]">Almoe Digital Solutions Pvt Ltd</span> | All Rights
                Reserved</p>
        </div>
    </footer>

    <!-- Mobile Menu Toggle Script -->
    <script>
        document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
