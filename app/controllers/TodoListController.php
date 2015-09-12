<?php

class TodoListController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => ['post', 'put']));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$todo_lists = TodoList::all();
		return View::make('todos.index')->with('todo_lists', $todo_lists);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::check()){
			return View::make('todos.create');
		}
		return Redirect::route('todos.index')->withMessage('Not allowed here, Please Login!');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//Define Rules
		$rules = [
			//input =>  required, match DB table, table column
			'title' => ['required','unique:todo_lists,name']
		];

		//pass these rules to validator
		$validator = Validator::make( Input::all() , $rules );

		//test if input fails
		if( $validator->fails() ){
			return Redirect::route('todos.create')->withErrors($validator)->withInput();
		}

		//save
		$name = Input::get('title');
		$list = new TodoList();
		$list->name = $name;
		$list->save();
		return Redirect::route('todos.index')->withMessage('List Was Created!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$list = TodoList::findOrFail($id);
		$items = $list->listItems()->get();
		return View::make('todos.show')
		->withList($list)
		->withItems($items);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$list = TodoList::findOrFail($id);
		return View::make('todos.edit')->withList($list);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//Define Rules
		$rules = [
			//input =>  required, match DB table, table column
			'name' => ['required','unique:todo_lists']
		];

		//pass these rules to validator
		$validator = Validator::make( Input::all() , $rules );

		//test if input fails
		if( $validator->fails() ){
			return Redirect::route('todos.edit', $id)->withErrors($validator)->withInput();
		}

		//save
		$name = Input::get('name');
		$list = TodoList::findOrFail($id);
		$list->name = $name;
		$list->update();
		return Redirect::route('todos.index')->withMessage('List Was Updated!');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$list = TodoList::findOrFail($id)->delete();
		return Redirect::route('todos.index')->withMessage('List Item Was Deleted!');
	}


}
