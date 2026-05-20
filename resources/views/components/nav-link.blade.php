@props(['active' => false])

<a class="{{ $active ?  'bg-gray-900 text-white': 'text-gray-300 hover:bg-white/5 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium border-style-solid border-2  border-gray-300 hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 focus:ring-offset-gray-800"
   aria-current="{{ $active ?  'page': 'false'}}" {{ $attributes }}>{{ $slot }}</a>
