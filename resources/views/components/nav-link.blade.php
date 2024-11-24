@props(['active' => false, 'type'=> 'a'])

<a class="{{ $active ? 'bg-white/5 rounded-xl border border-transparent' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
aria-current="{{ $active ? 'page': 'false' }}"
{{ $attributes }}
>{{ $slot }}</a>