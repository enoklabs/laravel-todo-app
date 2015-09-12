@extends('layouts.main')

@section('content')
	<section>
	    <div class="row">
	      <h2>Create New Project</h2>

	      <div class="images panel columns large-8">

			
			{{ Form::open( array('route' => 'portfolio.store') ) }}
				<fieldset>
	            <legend>Project Information</legend>

	            
	            {{ Form::label( 'name', 'Project Title' ) }}
	            {{ Form::text( 'name' ) }}

	            
				{{ Form::label( 'subject', 'Subject' ) }}
				{{ Form::text( 'subject' ) }}

	            
	            {{ Form::label( 'url', 'URL of Project' ) }}
				{{ Form::text( 'url' ) }}

	            
	            {{ Form::label( 'description', 'Please add a small description' ) }}
				{{ Form::text( 'description' ) }}

	            </fieldset>
				
				<!-- <fieldset>
		            <legend>About the Job</legend>
		            Project URL: <input type="text"><br>
		            Tasks: <input type="text"><br>
		            Technologies Used?: <input type="text">
		          </fieldset>

		          <fieldset>
		            <legend>Upload Project Images</legend>
		            Images: <input type="file" multiple>
		        </fieldset> -->
	            
	            {{ Form::submit( 'Add Project' , array('class' => 'button small' ) ) }}

			{{ Form::close() }}



	      </div>


	    </div>
	</section>
@stop