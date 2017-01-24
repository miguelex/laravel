<?php namespace Libreria\Http\Controllers;

use Libreria\Http\Requests;
use Libreria\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view ('index');
	}

    public function contacto()
    {
        return view ('contacto');
    }

    public function reviews()
    {
        return view ('reviews');
    }

}
