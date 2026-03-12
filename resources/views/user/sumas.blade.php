<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
    Сумма:@if (count($arr)>0)
     {{  }}
     @endif
     @if (count($arr)==0)
     В массиве нет элементов
     @endif
</x-layout>