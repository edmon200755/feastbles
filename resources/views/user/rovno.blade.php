<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
<p> 
    @if ($age > 18)
    Привет, старина
    @endif 
    @if($age == 18)
    Привет, совершеннолетний
    @endif
    @if ($age < 18)
    Привет, несовершеннолетний
    @endif
    </p>
</x-layout>