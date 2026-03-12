<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
<p> 
    @if ($age > 18)
    Вижу вам больше 18
    @else
    Вы не увидите текст, вам меньше 18
    @endif
    </p>
<p> 
</x-layout>