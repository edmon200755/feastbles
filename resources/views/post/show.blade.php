<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
	@foreach ($posts as $post)
		<div>
			<h2>{{ $post->title }}</h2>
			<div>
				{{ $post->slug }}
			</div>
		</div>
	@endforeach
</x-layout>
