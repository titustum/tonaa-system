<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $title ?? 'Tonaa — Tournament Management Made Simple' }}</title>
    <meta name="description"
        content="Tonaa helps coaches manage teams and players while sponsors create and manage tournaments for their communities." />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Apply saved theme before first paint to avoid flash -->
    <script>
        if (localStorage.getItem("tonaa-theme") === "dark") {
            document.documentElement.classList.add("dark");
        }
    </script>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Inter, ui-sans-serif, system-ui, -apple-system,
                BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        .mobile-drawer {
            transition: transform 280ms cubic-bezier(.4, 0, .2, 1);
        }

        .mobile-overlay {
            transition: opacity 220ms ease;
        }

        .drawer-open .mobile-drawer {
            transform: translateX(0);
        }

        .drawer-open .mobile-overlay {
            opacity: 1;
            pointer-events: auto;
        }

        .drawer-open {
            overflow: hidden;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900 antialiased
         dark:bg-slate-950 dark:text-white transition-colors duration-200">

    <!-- =========================================================
       NAVIGATION
  ========================================================== -->
    <header class="fixed inset-x-0 top-0 z-50 border-b border-slate-200/80
           bg-white/95 backdrop-blur-xl
           dark:border-slate-800 dark:bg-slate-950/95">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

            <div class="flex h-16 items-center justify-between">

                <!-- Logo -->
                <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-3">

                    <div class="flex h-9 w-9 items-center justify-center rounded-lg
                   bg-blue-600 text-white">
                        <ion-icon name="trophy-outline" class="text-xl"></ion-icon>
                    </div>

                    <div>
                        <span class="text-xl font-extrabold tracking-tight">
                            Tonaa
                        </span>

                        <span class="ml-1 hidden text-[10px] font-semibold uppercase
                     tracking-widest text-slate-400 sm:inline">
                            Tournament Management
                        </span>
                    </div>

                </a>


                <!-- Desktop Navigation -->
                <nav class="hidden items-center gap-8 md:flex">

                    <a href="{{ route('home') }}" wire:navigate
                       @class(['text-sm font-medium transition
                       hover:text-blue-600 dark:hover:text-blue-400',
                       'text-blue-600 dark:text-blue-400' => request()->routeIs('home'),
                       'text-slate-600 dark:text-slate-300' => ! request()->routeIs('home')])>
                        Home
                    </a>

                    <a href="{{ route('about') }}" wire:navigate
                       @class(['text-sm font-medium transition
                       hover:text-blue-600 dark:hover:text-blue-400',
                       'text-blue-600 dark:text-blue-400' => request()->routeIs('about'),
                       'text-slate-600 dark:text-slate-300' => ! request()->routeIs('about')])>
                        About Us
                    </a>

                    <a href="{{ route('contact') }}" wire:navigate
                       @class(['text-sm font-medium transition
                       hover:text-blue-600 dark:hover:text-blue-400',
                       'text-blue-600 dark:text-blue-400' => request()->routeIs('contact'),
                       'text-slate-600 dark:text-slate-300' => ! request()->routeIs('contact')])>
                        Contact
                    </a>

                </nav>


                <!-- Desktop Actions -->
                <div class="hidden items-center gap-3 md:flex">

                    <!-- Theme -->
                    <button id="themeToggle" type="button" aria-label="Toggle dark mode" class="flex h-9 w-9 items-center justify-center rounded-lg
                   border border-slate-200 text-slate-600
                   hover:bg-slate-100
                   dark:border-slate-800 dark:text-slate-300
                   dark:hover:bg-slate-900">
                        <ion-icon id="themeIcon" name="moon-outline" class="text-lg"></ion-icon>
                    </button>


                    <a href="{{ route('register-team') }}" wire:navigate class="inline-flex items-center gap-2 rounded-lg
                   bg-blue-600 px-4 py-2.5 text-sm font-semibold
                   text-white hover:bg-blue-700 transition">
                        Register Your Team
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>

                </div>


                <!-- Mobile Actions -->
                <div class="flex items-center gap-2 md:hidden">

                    <button id="mobileThemeToggle" type="button" aria-label="Toggle dark mode" class="flex h-9 w-9 items-center justify-center rounded-lg
                   border border-slate-200 text-slate-600
                   dark:border-slate-800 dark:text-slate-300">
                        <ion-icon id="mobileThemeIcon" name="moon-outline"></ion-icon>
                    </button>

                    <button id="menuButton" type="button" aria-label="Open menu" class="flex h-9 w-9 items-center justify-center rounded-lg
                   border border-slate-200 text-slate-700
                   dark:border-slate-800 dark:text-slate-200">
                        <ion-icon name="menu-outline" class="text-xl"></ion-icon>
                    </button>

                </div>

            </div>
        </div>
    </header>



    <!-- =========================================================
       MOBILE DRAWER
  ========================================================== -->

    <div id="mobileNav">

        <!-- Overlay -->
        <div id="drawerOverlay" class="mobile-overlay pointer-events-none fixed inset-0 z-[60]
             bg-slate-950/40 opacity-0 backdrop-blur-sm"></div>


        <!-- Drawer -->
        <aside class="mobile-drawer fixed bottom-0 left-0 top-0 z-[70]
             w-[min(86vw,360px)] -translate-x-full
             border-r border-slate-200 bg-white shadow-2xl
             dark:border-slate-800 dark:bg-slate-950">

            <div class="flex h-full flex-col">

                <!-- Drawer header -->
                <div class="flex h-16 items-center justify-between
                 border-b border-slate-200 px-5
                 dark:border-slate-800">

                    <div class="flex items-center gap-3">

                        <div class="flex h-9 w-9 items-center justify-center rounded-lg
                     bg-blue-600 text-white">
                            <ion-icon name="trophy-outline"></ion-icon>
                        </div>

                        <span class="text-lg font-extrabold">Tonaa</span>

                    </div>

                    <button id="closeMenu" class="flex h-9 w-9 items-center justify-center
                   rounded-lg text-slate-500 hover:bg-slate-100
                   dark:hover:bg-slate-900">
                        <ion-icon name="close-outline" class="text-2xl"></ion-icon>
                    </button>

                </div>


                <!-- Links -->
                <nav class="flex-1 p-5">

                    <div class="space-y-1">

                        <a href="{{ route('home') }}" wire:navigate
                           @class(['mobile-link flex items-center gap-3 rounded-xl px-4 py-3 transition',
                           'bg-blue-50 font-semibold text-blue-700 dark:bg-blue-900/30 dark:text-blue-300' => request()->routeIs('home'),
                           'font-medium text-slate-600 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900' => ! request()->routeIs('home')])>
                            <ion-icon name="home-outline"></ion-icon>
                            Home
                        </a>

                        <a href="{{ route('about') }}" wire:navigate
                           @class(['mobile-link flex items-center gap-3 rounded-xl px-4 py-3 transition',
                           'bg-blue-50 font-semibold text-blue-700 dark:bg-blue-900/30 dark:text-blue-300' => request()->routeIs('about'),
                           'font-medium text-slate-600 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900' => ! request()->routeIs('about')])>
                            <ion-icon name="information-circle-outline"></ion-icon>
                            About Us
                        </a>

                        <a href="{{ route('contact') }}" wire:navigate
                           @class(['mobile-link flex items-center gap-3 rounded-xl px-4 py-3 transition',
                           'bg-blue-50 font-semibold text-blue-700 dark:bg-blue-900/30 dark:text-blue-300' => request()->routeIs('contact'),
                           'font-medium text-slate-600 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900' => ! request()->routeIs('contact')])>
                            <ion-icon name="mail-outline"></ion-icon>
                            Contact
                        </a>

                    </div>


                    <div class="my-6 border-t border-slate-200 dark:border-slate-800"></div>


                    <p class="mb-3 px-4 text-[10px] font-bold uppercase
                   tracking-[.2em] text-slate-400">
                        Get started
                    </p>

                    <a href="{{ route('register-team') }}"
                       class="mobile-link flex items-center justify-between
                   rounded-xl bg-blue-600 px-4 py-3.5
                   text-sm font-bold text-white">
                        Register Your Team
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>

                    <a href="{{ route('register-tournament') }}"
                       class="mobile-link mt-2 flex items-center justify-between
                   rounded-xl border border-slate-200 px-4 py-3.5
                   text-sm font-semibold text-slate-700
                   dark:border-slate-800 dark:text-slate-200">
                        Become a Sponsor
                        <ion-icon name="business-outline"></ion-icon>
                    </a>

                </nav>


                <!-- Drawer footer -->
                <div class="border-t border-slate-200 p-5 dark:border-slate-800">

                    <p class="mb-3 text-xs text-slate-400">
                        Follow Tonaa
                    </p>

                    <div class="flex gap-2">

                        <a href="#" aria-label="Facebook" class="flex h-9 w-9 items-center justify-center
                     rounded-lg bg-slate-100 text-slate-600
                     hover:bg-blue-600 hover:text-white
                     dark:bg-slate-900 dark:text-slate-400">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>

                        <a href="#" aria-label="Instagram" class="flex h-9 w-9 items-center justify-center
                     rounded-lg bg-slate-100 text-slate-600
                     hover:bg-blue-600 hover:text-white
                     dark:bg-slate-900 dark:text-slate-400">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>

                        <a href="#" aria-label="X" class="flex h-9 w-9 items-center justify-center
                     rounded-lg bg-slate-100 text-slate-600
                     hover:bg-blue-600 hover:text-white
                     dark:bg-slate-900 dark:text-slate-400">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>

                    </div>

                </div>

            </div>
        </aside>
    </div>



    <!-- =========================================================
       HERO
  ========================================================== -->

    <main>
        {{ $slot }}


    </main>



    <!-- =========================================================
       FOOTER
  ========================================================== -->

    <footer class="border-t border-slate-200 bg-white
           dark:border-slate-800 dark:bg-slate-950">

        <div class="mx-auto max-w-7xl px-5 py-12 sm:px-6 lg:px-8">

            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">

                <!-- blue -->
                <div class="sm:col-span-2">

                    <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-3">

                        <div class="flex h-9 w-9 items-center justify-center
                     rounded-lg bg-blue-600 text-white">
                            <ion-icon name="trophy-outline"></ion-icon>
                        </div>

                        <span class="text-xl font-extrabold">Tonaa</span>

                    </a>

                    <p class="mt-4 max-w-sm text-sm leading-6 text-slate-500
                   dark:text-slate-400">
                        A simple platform connecting coaches, teams and tournament
                        sponsors to make local football easier to organize.
                    </p>


                    <!-- Social -->
                    <div class="mt-6 flex gap-2">

                        <a href="#" aria-label="Facebook" class="flex h-9 w-9 items-center justify-center
                     rounded-lg border border-slate-200 text-slate-500
                     hover:border-blue-600 hover:bg-blue-600
                     hover:text-white dark:border-slate-800">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>

                        <a href="#" aria-label="Instagram" class="flex h-9 w-9 items-center justify-center
                     rounded-lg border border-slate-200 text-slate-500
                     hover:border-blue-600 hover:bg-blue-600
                     hover:text-white dark:border-slate-800">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>

                        <a href="#" aria-label="X" class="flex h-9 w-9 items-center justify-center
                     rounded-lg border border-slate-200 text-slate-500
                     hover:border-blue-600 hover:bg-blue-600
                     hover:text-white dark:border-slate-800">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>

                        <a href="#" aria-label="WhatsApp" class="flex h-9 w-9 items-center justify-center
                     rounded-lg border border-slate-200 text-slate-500
                     hover:border-blue-600 hover:bg-blue-600
                     hover:text-white dark:border-slate-800">
                            <ion-icon name="logo-whatsapp"></ion-icon>
                        </a>

                    </div>

                </div>


                <!-- Platform -->
                <div>

                    <h3 class="text-sm font-bold">
                        Platform
                    </h3>

                    <ul class="mt-4 space-y-3 text-sm text-slate-500
                   dark:text-slate-400">

                        <li>
                            <a href="{{ route('about') }}" wire:navigate class="hover:text-blue-600">
                                About Us
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('register-team') }}" wire:navigate class="hover:text-blue-600">
                                Register Team
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('register-tournament') }}" wire:navigate class="hover:text-blue-600">
                                Register Tournament
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-blue-600">
                                Find Tournaments
                            </a>
                        </li>

                    </ul>

                </div>


                <!-- Company -->
                <div>

                    <h3 class="text-sm font-bold">
                        Company
                    </h3>

                    <ul class="mt-4 space-y-3 text-sm text-slate-500
                   dark:text-slate-400">

                        <li>
                            <a href="{{ route('about') }}" wire:navigate class="hover:text-blue-600">
                                About Tonaa
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('contact') }}" wire:navigate class="hover:text-blue-600">
                                Contact
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-blue-600">
                                Privacy Policy
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-blue-600">
                                Terms of Service
                            </a>
                        </li>

                    </ul>

                </div>

            </div>


            <!-- Bottom -->
            <div class="mt-10 flex flex-col gap-3 border-t border-slate-200
               pt-7 text-xs text-slate-400
               dark:border-slate-800 sm:flex-row
               sm:items-center sm:justify-between">

                <p>
                    © 2026 Tonaa. All rights reserved.
                </p>

                <p>
                    Built for teams. Powered by community.
                </p>

            </div>

        </div>

    </footer>



    <!-- =========================================================
       JAVASCRIPT
  ========================================================== -->

    <script>
        /* ---------------------------------------------------------
       Mobile Drawer
    --------------------------------------------------------- */

    const body = document.body;
    const menuButton = document.getElementById("menuButton");
    const closeMenu = document.getElementById("closeMenu");
    const drawerOverlay = document.getElementById("drawerOverlay");
    const mobileLinks = document.querySelectorAll(".mobile-link");


    function openDrawer() {
      body.classList.add("drawer-open");
    }


    function closeDrawer() {
      body.classList.remove("drawer-open");
    }


    menuButton.addEventListener("click", openDrawer);
    closeMenu.addEventListener("click", closeDrawer);
    drawerOverlay.addEventListener("click", closeDrawer);


    mobileLinks.forEach(link => {
      link.addEventListener("click", closeDrawer);
    });


    /* ---------------------------------------------------------
       Dark Mode
    --------------------------------------------------------- */

    const themeToggle = document.getElementById("themeToggle");
    const mobileThemeToggle =
      document.getElementById("mobileThemeToggle");

    const themeIcon = document.getElementById("themeIcon");
    const mobileThemeIcon =
      document.getElementById("mobileThemeIcon");


    function updateThemeIcons() {

      const dark = document.documentElement.classList.contains("dark");

      const icon = dark ? "sunny-outline" : "moon-outline";

      themeIcon.setAttribute("name", icon);
      mobileThemeIcon.setAttribute("name", icon);
    }


    function toggleTheme() {

      document.documentElement.classList.toggle("dark");

      const isDark =
        document.documentElement.classList.contains("dark");

      localStorage.setItem(
        "tonaa-theme",
        isDark ? "dark" : "light"
      );

      updateThemeIcons();
    }


    themeToggle.addEventListener("click", toggleTheme);
    mobileThemeToggle.addEventListener("click", toggleTheme);


    /* ---------------------------------------------------------
       Sync icons with restored theme
    --------------------------------------------------------- */

    updateThemeIcons();


    /* ---------------------------------------------------------
       Escape key closes drawer
    --------------------------------------------------------- */

    document.addEventListener("keydown", (event) => {

      if (event.key === "Escape") {
        closeDrawer();
      }

    });

    </script>

    @livewireScripts
</body>

</html>