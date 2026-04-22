<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
	@foreach ($posts as $post)
		<div>
			<h2>{{ $post->title }}</h2>
			<div>
				{{ $post->desc }}
			</div>
            <div>
				{{ $post->text }}
			</div>
            <div>
				{{ $post->created_at }}
			</div>
            <div>
				{{ $post->updated_at }}
			</div>
		</div>
	@endforeach
</x-layout>
