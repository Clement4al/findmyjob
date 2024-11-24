@props(['employer'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $employer['name'] }}</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">
            <a href="{{ $employer['url'] }}" target="_blank">
            {{ $employer['name'] }}
        </a>
        </h3>
        <!-- <p class="text-sm mt-4">{{ $employer['name'] }}</p> -->
    </div>

    <div class="flex justify-between items-center mt-auto">
        
        <x-employers-logo :employer="$employer" :width="42" />
    </div> 
</x-panel>