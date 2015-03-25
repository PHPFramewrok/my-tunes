<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;


class TunesController extends Controller {

	/**
	 * Display app home page.
	 *
	 * @return Response
	 */
	public function index()
	{
		$libraryPath = $this->getLibraryFilePath();

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

	private function getLibraryFilePath() 
	{
		//TODO: Move to service
		return DB::table('library_path')->get();
	}


	private function getArtists() 
	{
		//TODO: temporary hard-coded move to sqlite DB/service
		return ['Beatles','Bob Dylan','Led Zeppelin','Neil Young','Rolling Stones','The Whos'];
	}

}
