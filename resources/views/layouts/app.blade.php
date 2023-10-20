@extends('layouts.base')
@php
    $routes = ['WOW', 'Route'];
@endphp
@section('body')
    <livewire:top-nav />
    <div class="flex flex-row">
        <livewire:side-nav :routes="$routes" />
        @yield('content')
    </div>
@endsection
