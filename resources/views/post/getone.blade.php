<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
	
	<table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%;">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Desc</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($posts as $post)
			<tr>
				<td>{{ $post->id }}</td>
				<td>{{ $post->title }}</td>
				<td>{{ $post->desc }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</x-layout>
