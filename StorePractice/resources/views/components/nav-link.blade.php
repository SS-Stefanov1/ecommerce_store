@props(['current' => 'false'])

<li class="{{ request()->path() === strtolower($slot) ? 'active' : 'none' }}"><a  {{ $attributes }}>{{ $slot }}</a></li>
