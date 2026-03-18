<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
<ul>
	@foreach ($employees as $user)
		<li>{{ $user['name'] }} {{ $user['surname'] }} {{ $user['salary'] }}</li>
	@endforeach
</ul>
</x-layout>