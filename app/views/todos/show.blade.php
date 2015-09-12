@extends('layouts.main')
@section('content')
	
	<div class="row">
		<div class="large-12">
			<h1>{{{ $list->name }}}</h1>
			<ul>
			@foreach ($items as $item)
				<li>{{{ $item->content }}} </li>
			@endforeach
			</ul>

			<p>{{ link_to_route('todos.index', 'back') }}</p>
		</div>
	</div>
@stop