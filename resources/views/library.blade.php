@extends('master')


@section('content')

	<div class="title">{{ $title }}</div>

	@foreach ($artists as $index => $artist)
		<div class="linked">

			<?php 
				$artistIndex = str_replace(' ', '_', $artist);
			?>
			<a href="artist/{{ $artistIndex }}">{{ $artist }}</a>
		</div>
	@endforeach

@stop