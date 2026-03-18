<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
@if (count($users)>0)
<ul> 
    @foreach ($users as $elem)
	<li>{{ $loop->iteration  }} {{ $elem }} </li>
@endforeach
</ul>
@endif
</x-layout>