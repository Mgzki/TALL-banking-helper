<div class="bg-gray-50 mt-14 pl-4 pt-4 text-stone-700 border-r border-gray-200 pr-4 transition-all {{$isExpanded ? 'w-72' : 'w-24'}}">
    <span wire:click="$dispatch('toggleSideNav')" class="text-sm semi-bold" >
        Dashboard
    </span>

    @if($isExpanded)
        <div
            x-data="{ isExpanded: @entangle('isExpanded') }"
            x-show="isExpanded"
            x-transition:enter="ease-in-out duration-200"
            x-transition:leave="ease-in-out duration-200"
            class="space-y-2 text-md font-semibold text-black"
        >
            @foreach($this->routes as $route)
                <div wire:key="{{ $route }}" class="p-2 border-gray-200 border-b-2 border-r-2 border-l-2 rounded shadow hover:bg-gray-100 cursor-pointer @if($route == $currentRoute) bg-blue-100 border-blue-200 hover:bg-blue-200 @endif">
                    {{$route}}
                </div>
            @endforeach
        </div>
    @endif
</div>
