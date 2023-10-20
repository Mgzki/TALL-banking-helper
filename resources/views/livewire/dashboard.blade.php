@extends('layouts.app')

@section('content')
    <div class="mt-14 min-h-[calc(100vh-56px)] items-center bg-gray-100 flex flex-col w-full">
        <div class="">
        @foreach($transactions as $transaction)
            <div class="px-2 py-4 bg-white border-2 rounded-lg w-24 inline-flex mt-4 overflow-none">
                ${{$transaction->amount}}
            </div>
        @endforeach
        </div>
        <div class="">
            test
        </div>
    </div>
@endsection
