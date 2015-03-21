<?php namespace App\Http\Controllers;

class TunesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Tunes Controller
	|--------------------------------------------------------------------------
	|
	| Main landing page for application.
	|
	*/

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('tunes');
	}

}
