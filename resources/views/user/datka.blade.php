<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
	@if (is_array($data))
    <ul>
	@foreach ($data as $key => $elem) 
		<li>{{ $elem }}</li>
	@endforeach
	</ul>
	@else
	{{ $data }}
	@endif
</x-layout>