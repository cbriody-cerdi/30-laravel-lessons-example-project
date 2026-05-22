@props(['name'])
@error($name)
    <p class="text-xs text-red-500 font-semibold mb-4">{{ $message }}</p>
@enderror
