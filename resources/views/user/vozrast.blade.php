<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
<p> 
    @if ($age > 18)
    Привет, совершеннолетний
    @else
    Привет, несовершеннолетний
    @endif
    </p>
<p> 
</x-layout>