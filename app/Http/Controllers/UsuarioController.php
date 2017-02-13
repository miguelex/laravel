<?php namespace Libreria\Http\Controllers;

use Libreria\Http\Requests;
use Libreria\Http\Requests\UserCreateRequest;
use Libreria\Http\Requests\UserUpdateRequest;
use Libreria\Http\Controllers\Controller;
use Libreria\User;
use Illuminate\Http\Request;
use Session;
use Redirect;
use Illuminate\Routing\Route;
class UsuarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route) {
	    $this->user = User::find($route->getParameter('usuario'));
    }
    public function index(Request $request)
	{
        $users = User::paginate(2);
        if($request->ajax()){
            return response()->json(view('usuario.users',compact('users'))->render());
        }
        return view('usuario.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('usuario.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserCreateRequest $request)
	{
		User::create($request->all());
        Session::flash('message', 'Usuario guardado correctamente');
		return redirect('/usuario');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('usuario.edit', ['user' => $this->user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UserUpdateRequest $request)
	{
        $this->user->fill($request->all());
        $this->user->save();

        Session::flash('message', 'Usuario actualizado');
        return redirect::to('/usuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
        $this->user->delete();
        Session::flash('message', 'Usuario borrado correctamente');
        return redirect::to('/usuario');
	}

}
