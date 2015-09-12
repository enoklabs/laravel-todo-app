@extends('layouts.main')
@section('content')
	<div class="row">
		<div class="large-12">
			<h2>Show All Todo Lists 
				<!-- <a href="/todos/create" class="button secondary small right">Create New List</a> -->
				{{ link_to_route(
					'todos.create', 
					'Create New List', 
					null, 
					['class' => 'button secondary small right']
				) }}
			</h2>
		</div>
		<hr>

		<div class="large-8 large-centered column">
				@foreach ($todo_lists as $list)
				<h4 class="left">{{ link_to_route('todos.show', $list->name, [$list->id] )  }} &nbsp;&nbsp;</h4> 
				<div class="large-3 right">
					<!-- TODO: If user is logged in Show the following -->
					<ul class="no-bullet button-group">
						<li>{{ link_to_route('todos.edit', 'edit', [$list->id], ['class' => 'tiny button left'] ) }}</li>
						{{ Form::model( $list, array('route' => ['todos.destroy', $list->id], 'method'=> 'DELETE' )) }}
							{{ Form::button( 'destroy' , ['type' => 'submit' , 'class' => 'tiny button alert left' ] ) }}
						{{ Form::close() }}
					</ul>
					<!-- TODO: Hide from public -->
				</div>
				<hr>
			@endforeach
		</div>
	</div>
@stop