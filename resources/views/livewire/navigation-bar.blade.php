@php
$currentRouteName = Route::currentRouteName();
$isDashboard = $currentRouteName === 'dashboard';
@endphp
<div class="relative justify-end w-full bg-gray-50 py-2 px-4 text-right sm:fixed top-0 sm:right-0 flex border-b-2 border-gray-300/50">
    @auth
        @if ($isDashboard)
            <a href="{{ route('home') }}" class="p-2 font-semibold text-gray-400 dark:hover:text-blue-400 focus:outline focus:outline-1 focus:rounded-sm focus:outline-blue-300">
                Home
            </a>
        @else
            <a href="{{ route('dashboard') }}" class="p-2 font-semibold text-gray-400 dark:hover:text-blue-400 focus:outline focus:outline-1 focus:rounded-sm focus:outline-blue-300">
                Dashboard
            </a>
        @endif

        <p onclick="document.getElementById('logout-form').submit();" class="cursor-pointer p-2 font-semibold text-gray-400 dark:hover:text-blue-400 focus:outline focus:outline-1 focus:rounded-sm focus:outline-blue-300">
            {{ __('Logout') }}
        </p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @else
        <a href="{{ route('login') }}" class="p-2 font-semibold text-gray-400 hover:text-blue-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="p-2 font-semibold text-gray-400 hover:text-blue-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500">Register</a>
        @endif
    @endauth
</div>
