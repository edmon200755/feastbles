<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
	@foreach ($users as $user)
		<div>
			<h2>{{ $user->name }}</h2>
			<div>
				{{ $user->email }}
			</div>
            <div>
				{{ $user->age }}
			</div>
            <div>
				{{ $user->salary }}
			</div>
            <div>
				{{ $user->created_at }}
			</div>
            <div>
				{{ $user->updated_at }}
			</div>
		</div>
	@endforeach
</x-layout>