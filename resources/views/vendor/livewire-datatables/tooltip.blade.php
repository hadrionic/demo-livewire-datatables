<span class="relative group cursor-pointer">
    <span class="inline-block flex items-center">{{ Str::limit($slot, 16) }}</span>
    <span class="hidden group-hover:block absolute z-10 -ml-28 w-96 mt-2 p-2 text-xs whitespace-pre-wrap rounded-lg bg-gray-100 border border-gray-300 shadow-xl text-gray-700 text-left whitespace-normal">{{ $slot }}</span>
</span>