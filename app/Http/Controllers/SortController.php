<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SortController extends Controller {

	/**
	 * Display artist page.
	 *
	 * @return Response
	 */
	public function artist($artistString)
	{
		$artist = str_replace('_', ' ',$artistString);
	
		return view('artist', compact('artist'));
	}


}
