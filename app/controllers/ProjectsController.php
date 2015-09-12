<?php

class ProjectsController extends \BaseController {
	
	public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Projects::all();
		return View::make('portfolio.index')->with('projects', $projects);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::check()){
			$project = new Projects();
			return View::make('portfolio.creator');
		}
		return Redirect::route('portfolio.index')->withMessage('Not allowed here, Please Login!');
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Get input fields from Create Form
		$name 		= Input::get('name');
		$subject 	= Input::get('subject');
		$url 		= Input::get('url');
		$description= Input::get('description');

		// Create a new Project from Projects() Model.
		$project 				= new Projects();
		$project->name 			= $name;
		$project->subject 		= $subject;
		$project->url 			= $url;
		$project->description 	= $description;
		$project->save();

		// Redirects to Public Portfolio
		return Redirect::route('portfolio.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = Projects::findOrFail($id);
		return View::make('portfolio.show')->withProject($project);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
