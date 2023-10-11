@extends('layouts.app')

@section('content')
    <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots selection:bg-indigo-500 selection:text-white">

        @if (Route::has('login'))
            <div class="p-6 text-right sm:fixed sm:top-0 sm:right-0">
                @auth
                    <a href="{{ route('home') }}" class="p-2 font-semibold text-gray-400 dark:hover:text-blue-400 focus:outline focus:outline-1 focus:rounded-sm focus:outline-blue-300">Home</a>
                    <a href="{{ route('logout') }}" onclick="preventDefault(); document.getElementById('logout-form').submit();" class="p-2 font-semibold text-gray-400 dark:hover:text-blue-400 focus:outline focus:outline-1 focus:rounded-sm focus:outline-blue-300">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-400 hover:text-blue-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-400 hover:text-blue-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="p-6 mx-auto max-w-7xl lg:p-8">
            <div class="flex justify-center text-white">
                Test
            </div>
            <div class="mt-16">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:gap-8">
                    test
                </div>
            </div>
            <div class="flex justify-center px-0 mt-16 sm:items-center sm:justify-between">
                <div class="text-sm text-center text-gray-500 sm:text-left">
                    <div class="flex items-center gap-4">

                    </div>
                </div>
                <div class="ml-4 text-sm text-center text-gray-500 sm:text-right sm:ml-0">
                </div>
            </div>
        </div>
    </div>
@endsection

