@if(isset($infos))
	<ul>
	@foreach($infos as $info)
		<li>
			{{ $info->id }}
			<ul>
				<li>{{ $info->name }}</li>
				<li>{{ $info->user }}</li>
				<li>{{ $info->address }}</li>
				<li>{{ $info->e_mail }}</li>
			</ul>
		</li>
	@endforeach
	</ul>
@endif