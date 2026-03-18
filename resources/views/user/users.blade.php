
<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
@if (count($users)>0)
    @foreach ($users as $elem)
	<p>{{ $elem }}</p>
@endforeach
@elseif (count($users)==0)
нету
@endif
</x-layout>