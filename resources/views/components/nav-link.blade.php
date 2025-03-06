@props(['active' => false])

<a {{ $attributes }} 
class="{{ $active ? 'text-green-500' : 'text-blue-900' }}  font-semibold" aria-current=" $active ? 'page' : false }}">{{ $slot }}</a>