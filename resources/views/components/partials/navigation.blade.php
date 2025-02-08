{{-- <nav>
    <ul>
        <li><a class="{{ request()->routeIs('home') ? 'text-green-400' : 'text-gray-600'}}" href="{{ route('home') }}">{{ __('Home') }}</a></li>
        <li><a class="{{ request()->routeIs('posts.*') ? 'text-green-400' : 'text-gray-600'}}" href="{{ route('posts.index') }}">{{ __('Blog') }}</a></li>
        <li><a class="{{ request()->routeIs('about') ? 'text-green-400' : 'text-gray-600'}}" href="{{ route('about') }}">{{ __('About') }}</a></li>
        <li><a class="{{ request()->routeIs('contact') ? 'text-green-400' : 'text-gray-600'}}" href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
    </ul>
</nav> --}}

<header class="bg-white px-6 shadow dark:bg-slate-900">
    <div class="mx-auto flex h-16 max-w-6xl items-center justify-between">
        <button id="toggle-mobile-menu"
                class="-ml-1 rounded p-1 text-slate-500 transition-colors hover:bg-sky-500 hover:text-slate-100 focus:ring-2 focus:ring-slate-200 md:hidden dark:text-slate-400 dark:hover:text-slate-100">
            <svg id="open-menu-icon" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg id="close-menu-icon" class="hidden h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <a class="hidden text-sky-500 duration-200 hover:rotate-6 md:block" href="{{ route('home') }}">
            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
            </svg>
        </a>
        <div class="-mr-4 flex items-center">
            <a class="text-sky-500 duration-200 hover:rotate-6 md:hidden" href="{{ route('home') }}">
                <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                </svg>
            </a>
            <div class="ml-8 hidden space-x-8 md:flex">
                <a class="px-3 py-2 {{ request()->routeIs('home') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                   href="{{ route('home') }}"
                > {{ __('Home') }} </a>
                <a class="px-3 py-2 {{ request()->routeIs('about') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                   href="{{ route('about') }}"
                > {{ __('About') }} </a>
                <a class="px-3 py-2 {{ request()->routeIs('posts.*') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                   href="{{ route('posts.index') }}"
                > {{ __('Blog') }} </a>
                <a class="px-3 py-2 {{ request()->routeIs('contact') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                   href="{{ route('contact') }}"
                > {{ __('Contact') }} </a>
            </div>
        </div>

        <div class="flex items-center pt-1">
            <div class="relative">
                <button id="toggle-theme-menu"
                        class="rounded-full text-slate-500 transition-colors hover:text-sky-500 focus:ring-2 focus:ring-slate-200 focus:ring-offset-1 focus:ring-offset-transparent dark:text-slate-400 dark:hover:text-sky-500 dark:focus:ring-slate-700">
                    <svg id="light-icon" class="hidden h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <svg id="dark-icon" class="hidden h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"></path>
                    </svg>
                    <svg id="system-icon" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"></path>
                    </svg>
                </button>
                <div id="theme-menu"
                     class="absolute right-0 z-20 hidden w-28 overflow-hidden rounded-md bg-white/90 shadow-lg dark:bg-slate-800/90">
                    <button data-theme-option="light"
                            class="flex w-full items-center space-x-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 focus:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900 dark:focus:bg-slate-900">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"></path>
                        </svg>
                        <span>Light</span>
                    </button>
                    <button data-theme-option="dark"
                            class="flex w-full items-center space-x-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 focus:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900 dark:focus:bg-slate-900">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"></path>
                        </svg>
                        <span>Dark</span>
                    </button>
                    <button data-theme-option="system"
                            class="flex w-full items-center space-x-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 focus:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900 dark:focus:bg-slate-900">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"></path>
                        </svg>
                        <span>System</span>
                    </button>
                </div>
            </div>
            @auth
            <x-dropdown>
                <x-slot:trigger>
                    <button class="ml-4 rounded-full text-slate-500 transition-colors hover:text-sky-500 focus:ring-2 focus:ring-slate-200 focus:ring-offset-1">
                        <img class="h-6 w-6 rounded-full" src="https://ui-avatars.com/api?name={{ urlencode(Auth::user()->name) }}"
                                alt="{{ Auth::user()->name }}"/>
                    </button>
                </x-slot:trigger>
                <x-slot:content>
                    <x-dropdown-link :href="route('dashboard')">
                        {{ __('Dashboard') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot:content>
            </x-dropdown>
            @else
                <x-dropdown>
                    <x-slot:trigger>
                        <button class="ml-4 rounded-full text-slate-500 transition-colors hover:text-sky-500 focus:ring-2 focus:ring-slate-200 focus:ring-offset-1">
                            <svg class="w-6 h-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"></path>
                            </svg>
                        </button>
                    </x-slot:trigger>
                    <x-slot:content>
                        <x-dropdown-link :href="route('login')">
                            {{ __('Log in') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('register')">
                            {{ __('Register') }}
                        </x-dropdown-link>
                    </x-slot:content>
                </x-dropdown>
            @endauth
        </div>
    </div>
    <div id="mobile-menu" class="hidden space-y-1 border-t pb-3 pt-2 dark:border-slate-500">
        <a class="block rounded-md px-3 py-2 {{ request()->routeIs('home') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }}"
           href="{{ route('home') }}"
        > {{ __('Home') }} </a>
        <a class="block rounded-md px-3 py-2 {{ request()->routeIs('about') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }}"
           href="{{ route('about') }}"
        > {{ __('About') }} </a>
        <a class="block rounded-md px-3 py-2 {{ request()->routeIs('posts.*') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }}"
           href="{{ route('posts.index') }}"
        > {{ __('Blog') }} </a>
        <a class="block rounded-md px-3 py-2 {{ request()->routeIs('contact') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }}"
           href="{{ route('contact') }}"
        > {{ __('Contact') }} </a>
    </div>
</header>