@extends('layouts.main')

@section('content')

	<section>
	    <div class="row">
	      <h2>{{{ $project->name }}}</h2>
	      <div class="panel columns large-8">
	        <img src="http://placehold.it/640x360" alt="img"><hr>
	        <img src="http://placehold.it/640x360" alt="img"><hr>
	        <img src="http://placehold.it/640x360" alt="img"><hr>
	      </div>



	        <aside class="side columns large-4">

	          <div class="title panel">
	            <h3>{{{ $project->name }}}</h3>
	            <p>{{{ $project->subject }}}</p>
	          </div>

	          <div class="about panel">
	            <p>{{{ $project->description }}}</p>
	          </div>

	          <div class="link panel">
	            <a href="http://{{{ $project->url }}}">http://{{{ $project->url }}}</a>
	          </div>

	          <!-- <div class="task panel">
	            <h6>Project specifics:</h6>
	            <ul>
	              <li>UI Design</li>
	              <li>Branding</li>
	              <li>Custom Illustration</li>
	              <li>General Creative</li>
	              <li>Website Design</li>
	            </ul>
	          </div>

	          <div class="technology panel">
	            <h6>Technologies used:</h6>
	            <ul>
	              <li>Photoshop</li>
	              <li>Html5/CSS</li>
	              <li>Angular.js</li>
	              <li>Node.js</li>
	              <li>MongoDB</li>
	            </ul>
	          </div> -->

	        </aside>


	    </div>
	</section>
@stop