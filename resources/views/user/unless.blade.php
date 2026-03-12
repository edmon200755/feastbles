<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
    @unless($age == 18)
    вы несовершеннолетний
    @endif
</x-layout>