@extends('layouts.base')
@section('body')
    <livewire:navigation-bar />
    <div class="bg-gray-100">
        @yield('content')
        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
