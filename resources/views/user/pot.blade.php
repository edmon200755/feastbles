<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
    <p> Страна: @if (!$location['strana']) 
        Россия
        @else
        {{ $location['strana'] }}
        @endif
    </p>
        <p> Страна: @if (!$location['city']) 
        Москва
        @else
        {{ $location['city'] }}
        @endif
    </p>
</x-layout>