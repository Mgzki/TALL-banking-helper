@extends('layouts.base')
@section('body')
    <livewire:top-nav />
    <div class="flex flex-row">
        <livewire:side-nav />
        @yield('content')
    </div>
@endsection
