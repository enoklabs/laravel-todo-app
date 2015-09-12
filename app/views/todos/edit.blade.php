@extends('layouts.main')

@section('content')
	<div class="row">
	<br><h4 class="large-8 large-centered columns">Edit New List</h4>
	
		<div class="large-8 large-centered columns panel">

			{{ Form::model( $list, array('route' => ['todos.update', $list->id], 'method'=> 'PUT' )) }}
				{{ Form::label('name', 'List Title' ) }}
				{{ Form::text( 'name', null, array('placeholder'=>'Enter list title' ) ) }}
				{{ $errors->first('name', '<small class="error">:message</small>') }}
				{{ Form::submit( 
					'Update' , 
					array('class' => 'button small success radius' ) 
					)
				}}
			{{ Form::close() }}
		</div>
	</div>
@stop