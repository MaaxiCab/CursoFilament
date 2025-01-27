<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

</head>

<body>
    <nav x-data="{ open: false }" class="bg-white shadow-md z-10 sticky top-0">
        <!-- Primary Navigation Menu -->
        <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-0 py-3 ">
            <div class="flex justify-between h-full items-center ">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}">
                        <x-application-mark class="block h-12 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:flex space-x-6 ml-auto">
                    <x-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                        {{ __('Inicio') }}
                    </x-nav-link>
                    <x-nav-link href="#quienes-somos" :active="request()->routeIs('QuienesSomos')">
                        {{ __('Quienes somos') }}
                    </x-nav-link>
                    <x-nav-link href="#nuestro-equipo" :active="request()->routeIs('NuestroEquipo')">
                        {{ __('Nuestro equipo') }}
                    </x-nav-link>
                    <x-nav-link href="#nuestros-servicios" :active="request()->routeIs('dashboard')">
                        {{ __('Nuestros servicios') }}
                    </x-nav-link>
                    <x-nav-link href="#actualidad-juridica" :active="request()->routeIs('dashboard')">
                        {{ __('Actualidad juridica') }}
                    </x-nav-link>
                </div>

                <!-- Hamburger -->
                <div class="sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden sticky top-0">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                    {{ __('Inicio') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#quienes-somos" :active="request()->routeIs('QuienesSomos')">
                    {{ __('Quienes somos') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#nuestro-equipo" :active="request()->routeIs('NuestroEquipo')">
                    {{ __('Nuestro equipo') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#nuestros-servicios" :active="request()->routeIs('dashboard')">
                    {{ __('Nuestros servicios') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#actualidad-juridica" :active="request()->routeIs('dashboard')">
                    {{ __('Actualidad juridica') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="flex-shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover"
                                src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</body>

</html>
