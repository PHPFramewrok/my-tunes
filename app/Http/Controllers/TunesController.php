<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TunesController extends Controller {

	/**
	 * Display app home page.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('tunes')->withTitle('myTunes');
	}


	/**
	 * Display artist list.
	 *
	 * @return Response
	 */
	public function library()
	{
		$title = 'Artists';
		
		$artists = $this->getArtists();


		return view('library', compact('title','artists'));
		// ^ functional equivalent to...
		//return view('artists', ['artists'=>$artists,'title'=>$title]);

	}


	// P R I V A T E   F U N C T I O N S:

	private function getArtists() 
	{
		//TEMP: temporary hard-coded move to sqlite DB/service
		return ['Beatles','Bob Dylan','Led Zeppelin','Neil Young','Rolling Stones','The Whos'];
	}

}
