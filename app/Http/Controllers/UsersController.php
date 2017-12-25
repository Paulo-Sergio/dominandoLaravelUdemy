<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Http\Requests\UpdateUserRequest;

class UsersController extends Controller {
    
    public function __construct() {
	$this->middleware('auth', ['except' => ['show']]);
	$this->middleware('roles:admin', ['except' => ['edit', 'update', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
	$users = User::all();

	return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
	return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
	User::create($request->all());

	return redirect()->route('users.create')->with('info', 'Usuário criado com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
	$user = User::findOrFail($id);

	return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
	$user = User::findOrFail($id);
	
	$this->authorize($user);

	return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id) {
	$user = User::findOrFail($id);
	
	$this->authorize($user);
	
	$user->update($request->all());
	
	return back()->with('info', 'Usuário atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
	$user = User::findOrFail($id);
	
	$this->authorize($user);
	
	$user->delete();
	
	return redirect()->route('users.index');
    }

}
