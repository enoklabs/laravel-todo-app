<?php

class SessionsController extends \BaseController {

	// /**
	//  * Display a listing of the resource.
	//  *
	//  * @return Response
	//  */
	// public function index()
	// {
	// 	//
	// }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if( Auth::check() ) return Redirect::to('/');
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Auth::attempt(Input::only('email','password')) ){
			return Redirect::route('portfolio.index')->withMessage('Welcome, ' . Auth::user()->name)->withFlash_type('success');
		}
		return Redirect::route('sessions.create')
		->with('message', 'Failed! Check password: justdoit')
		->with('flash_type', 'alert')
		->withInput();
	}


	// /**
	//  * Display the specified resource.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function show($id)
	// {
	// 	//
	// }


	// *
	//  * Show the form for editing the specified resource.
	//  *
	//  * @param  int  $id
	//  * @return Response
	 
	// public function edit($id)
	// {
	// 	//
	// }


	// /**
	//  * Update the specified resource in storage.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function update($id)
	// {
	// 	//
	// }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		if(Auth::check()){
			Auth::logout();
			return Redirect::route('sessions.create')->withMessage('You were successfully logged out!')->with('flash_type', 'success');
		}
		return Redirect::to('/')->withMessage('You never logged in!')->with('flash_type', 'info');
	}


}
