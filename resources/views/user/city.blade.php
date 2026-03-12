<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
    @if (!$city)
    Москва
    @else
    {{$city}}
    @endif
</x-layout>