    
    
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>बैठक | Meeting</title>
    </head>

    <body class="container mx-auto px-4 sm:px-6 lg:px-8 flex min-h-screen flex-col">

        <nav class="flex justify-between items-center h-[6rem]">
            <div class="flex items-center">
                <a href="/" class="flex title-font font-medium items-center text-gray-900 dark:text-white">
                    <svg class="h-12 w-12" viewBox="0 0 100 100" fill="none">
                        <rect width="100" height="100" rx="50" class="fill-black dark:fill-white" />
                        <path class="fill-white dark:fill-black"
                            d="M36.65 33H50.4C52.7333 33 54.6 33.2 56 33.6C57.4333 33.9667 58.5333 34.55 59.3 35.35C60.1 36.1167 60.6333 37.0833 60.9 38.25C61.1667 39.3833 61.3 40.7 61.3 42.2C61.3 43.2667 61.1833 44.2333 60.95 45.1C60.7167 45.9667 60.3333 46.7167 59.8 47.35C59.3 47.95 58.6167 48.4333 57.75 48.8C56.9167 49.1667 55.8833 49.35 54.65 49.35V49.55C55.9833 49.55 57.15 49.7667 58.15 50.2C59.1833 50.6333 60.0333 51.25 60.7 52.05C61.4 52.8167 61.9167 53.7333 62.25 54.8C62.6167 55.8667 62.8 57.0333 62.8 58.3C62.8 59.8667 62.65 61.3 62.35 62.6C62.05 63.9 61.4667 65.0333 60.6 66C59.7667 66.9333 58.5667 67.6667 57 68.2C55.4667 68.7333 53.4333 69 50.9 69H36.65V66L41.3 65V37L36.65 36V33ZM51.1 65.25C52.4333 65.25 53.5167 65.0833 54.35 64.75C55.2167 64.4167 55.8833 63.95 56.35 63.35C56.85 62.75 57.1833 62.0333 57.35 61.2C57.5167 60.3333 57.6 59.3667 57.6 58.3C57.6 57.1667 57.5 56.1833 57.3 55.35C57.1333 54.4833 56.8167 53.7667 56.35 53.2C55.8833 52.6333 55.25 52.2 54.45 51.9C53.6833 51.6 52.6833 51.45 51.45 51.45H46.25V65.25H51.1ZM56.1 42.2C56.1 41.3667 56.0167 40.6167 55.85 39.95C55.7167 39.25 55.45 38.6667 55.05 38.2C54.65 37.7333 54.0833 37.3833 53.35 37.15C52.65 36.8833 51.7333 36.75 50.6 36.75H46.25V47.7H50.9C51.9333 47.7 52.7833 47.5833 53.45 47.35C54.15 47.0833 54.6833 46.7167 55.05 46.25C55.45 45.7833 55.7167 45.2167 55.85 44.55C56.0167 43.85 56.1 43.0667 56.1 42.2Z" />
                    </svg>
                    <span class="ml-3 text-xl">बैठक</span>
                </a>
                {{-- <ul class="ml-28 lg:flex items-center gap-8 hidden">
                    <li>
                        <a href="#" class="hover:opacity-75 hover:underline">Home</a>
                    </li>
                    <li>
                        <a href="#" class="hover:opacity-75 hover:underline">Features</a>
                    </li>
                    <li>
                        <a href="#" class="hover:opacity-75 hover:underline">Pricing</a>
                    </li>
                </ul> --}}
            </div>
            <div class="flex items-center">
                <div class="mr-8 relative">
                    @if(Auth::check())
                        <button id="username" class="author block hover:underline">
                            {{ Auth::user()->name }}
                        </button>
                        <form id="logout_form" class="absolute hidden w-full mt-2" action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="p-2 block rounded border dark:border-gray-500 dark:hover:bg-[#333] hover:bg-gray-300 text-center w-full" >Logout</button>
                        </form>
                    @else
                        <a class="block hover:underline" href="/login">Login</a>
                    @endif
                </div>
                <button onclick="toggleTheme()"
                    class="hidden lg:block rounded-md p-2 border border-[#acacac] dark:border-[#333] hover:bg-gray-300 cursor-pointer text-black dark:text-white dark:hover:bg-[#3d3d3d]">
                    <svg class="sun h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    <svg class="moon h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>
            </div>
            <button onclick="toggleHamburger()" class="hamburger lg:hidden">
                <svg class="h-7 w-7" viewBox="0 0 123 96" fill="none">
                    <g>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.94 0H113.94C118.86 0 122.88 4.02 122.88 8.94C122.88 13.86 118.86 17.88 113.94 17.88H8.94C4.02 17.88 0 13.86 0 8.94C0 4.02 4.02 0 8.94 0ZM8.94 78.07H113.94C118.86 78.07 122.88 82.09 122.88 87.01C122.88 91.93 118.86 95.95 113.94 95.95H8.94C4.02 95.95 0 91.93 0 87.01C0 82.09 4.02 78.07 8.94 78.07ZM8.94 39.03H113.94C118.86 39.03 122.88 43.05 122.88 47.97C122.88 52.89 118.86 56.91 113.94 56.91H8.94C4.02 56.91 0 52.89 0 47.97C0 43.06 4.02 39.03 8.94 39.03Z" class="fill-black dark:fill-white" />
                    </g>
                </svg>
            </button>
        
            <aside class="mobile_sidebar fixed hidden inset-y-0 z-20 w-full left-0 h-full bg-white dark:bg-[#1c1c1c] md:hidden">
                <div class="p-4 text-gray-500 dark:text-gray-400 relative">
                <button onclick="toggleHamburger()" class="cross absolute top-5 right-5 text-black dark:text-white">
                    <svg class="h-8 w-8" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                <ul class="mt-16 text-center">
                    <li class="">
                        <a href="/#" class="text-lg hover:underline hover:text-blue-500 font-semibold">
                            Home
                        </a>
                    </li>
                    <li class="mt-4">
                        <a href="/#" class="text-lg hover:underline hover:text-blue-500 font-semibold">
                            Features
                        </a>
                    </li>
                    <li class="mt-4">
                        <a href="/#" class="text-lg hover:underline hover:text-blue-500 font-semibold">
                            Pricing
                        </a>
                    </li>
                </ul>
                <hr class="border-gray-300 dark:border-[#333] mt-8">
                <div class="flex items-center justify-center mt-10">
                    <button onclick="toggleTheme()"
                        class="rounded-md p-2 border border-[#acacac] dark:border-[#333] hover:bg-gray-300 cursor-pointer text-black dark:text-white dark:hover:bg-[#3d3d3d]">
                        <svg class="sun h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                        <svg class="moon h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                        </svg>
                    </button>
                </div>
                </div>
            </aside>
        
        </nav>

        <main class="flex-auto">
            @yield('content')
        </main>

        <footer class="py-4">
            <ul class="links flex gap-4 justify-center items-center flex-col text-xs md:flex-row md:py-8 md:justify-between">
                <li class=" text-gray-500">
                    © <span id="year"></span> Baithak Communication Pvt Ltd
                </li>
                <li class="text-gray-500">
                    developed with ❤️ by <a href="https://jyotirmaybarman.com" class="hover:underline hover:text-blue-500">Jyotirmay Barman</a> & Swastika Roy
                </li>

            </ul>
        </footer>
        <script>
            // Logout related stuff
            const username = document.querySelector('#username');
            const logout_form = document.querySelector('#logout_form');
            if(username){
                username.addEventListener('click', ()=> {
                    logout_form.classList.toggle('hidden');
                });
            }

            // Theme related stuff
            let theme = localStorage.getItem('theme') || "light";
            const moons = document.querySelectorAll('.moon');
            const suns = document.querySelectorAll('.sun');

            function setTheme(theme) {
                if (theme == 'dark') {
                    document.body.classList.add('dark');
                    actOnSun('show');
                    actOnMoon('hide');
                } else {
                    document.body.classList.remove('dark');
                    actOnSun('hide');
                    actOnMoon('show');
                }
                localStorage.setItem('theme', theme);
            }
            function actOnSun(action = 'show') {
                suns.forEach(sun => {
                    if (action == 'show') {
                        sun.classList.remove('hidden');
                    } else {
                        sun.classList.add('hidden');
                    }
                });
            }
            function actOnMoon(action = 'show') {
                moons.forEach(moon => {
                    if (action == 'show') {
                        moon.classList.remove('hidden');
                    } else {
                        moon.classList.add('hidden');
                    }
                });
            }
            setTheme(theme);
            function toggleTheme() {
                if (theme == 'dark') {
                    theme = 'light';
                } else {
                    theme = 'dark';
                }
                setTheme(theme);
            }


            // Hamburger and sidebar related stuff
            const mobileSidebar = document.querySelector('.mobile_sidebar');
            function toggleHamburger(){
            mobileSidebar.classList.toggle('hidden');
            }
            // Footer current year
            const yearSlot = document.querySelector('#year');
            const currentYear = new Date().getFullYear();
            yearSlot.innerText = currentYear;
        
        </script>
        
    </body>

    </html>

