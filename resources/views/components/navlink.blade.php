@props(['active' => false])

<a
class="{{ $active ? 'bg-green-950 text-white' : 'text-gray-300 hover:bg-orange-200 hover:text-white' }} 
rounded-md px-3 py-2 text-sm font-medium"  
aria-current="{{ $active ? 'page' : false }}"{{ $attributes }}>{{ $slot  }}</a>