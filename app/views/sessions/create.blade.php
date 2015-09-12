@extends('layouts.main')

@section('content')
	<section>
	    <div class="row">
	      
			
			{{ Form::open( ['route' => 'sessions.store'] ) }}
				<fieldset>
	            <legend>Login</legend>
	            
	            {{ Form::label( 'email', 'Email:' ) }}
	            {{ Form::email( 'email' ) }}

				{{ Form::label( 'password', 'Password:' ) }}
	            {{ Form::password( 'password' ) }}

	            {{ Form::submit('Login' , array('class' => 'button small radius' )) }}

			{{ Form::close() }}

	    </div>
	</section>

@stop