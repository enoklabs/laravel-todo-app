@extends('layouts.main')

@section('content')

  <div class="row portfolio">
    <h2>Portfolio of My Projects
        <!-- TODO: Hide from public Only show for logged in users -->
        <a href="/portfolio/create" class="button secondary small right">Create New Project</a>
        <!-- TODO: If user logged in show the above -->
    </h2>

    @foreach ($projects as $project)
        <div class="columns large-3 panel">
            <h5>{{ link_to_route('portfolio.show', $project->name, [$project->id] )  }}</h5>
            <img src="http://placehold.it/300x160">
        </div>
    @endforeach
    
  </div>

@stop