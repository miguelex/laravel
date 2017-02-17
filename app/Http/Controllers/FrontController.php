<?php namespace Libreria\Http\Controllers;

use Libreria\Http\Requests;
use Libreria\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Libreria\Movie;

class FrontController extends Controller {

	public function __construct()
    {
        $this->middleware('auth', ['only' => 'admin']);
    }

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
        $movies = Movie::Movies();
        return view ('reviews',compact('movies'));
    }

    public function admin(){
        return view('admin.index');
    }

}
