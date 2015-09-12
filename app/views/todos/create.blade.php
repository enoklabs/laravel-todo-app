@extends('layouts.main')

@section('content')
	<div class="row">
	<br><h4 class="large-8 large-centered columns">Create New List</h4>
	
		<div class="large-8 large-centered columns panel">

			{{ Form::open( array('route' => 'todos.store') ) }}
				{{ Form::label('title', 'List Title' ) }}
				{{ Form::text( 'title', null, array('placeholder'=>'Enter list title' ) ) }}
				{{ $errors->first('title', '<small class="error">:message</small>') }}
				{{ Form::submit( 
					'submit' , 
					array('class' => 'button small success radius' ) 
					)
				}}
			{{ Form::close() }}
		</div>
	</div>
@stop