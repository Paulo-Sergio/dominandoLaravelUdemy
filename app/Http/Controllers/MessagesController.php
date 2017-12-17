<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageResquest;
use App\Message;

class MessagesController extends Controller {

    public function __construct() {
	$this->middleware('auth', ['except' => ['create', 'store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
	$messages = Message::all();

	return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
	return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMessageResquest $request) {
	Message::create($request->all());

	return redirect()->route('mensagens.create')->with('info', 'Mensagem enviada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
	$message = Message::findOrFail($id);

	return view('messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
	$message = Message::findOrFail($id);

	return view('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateMessageResquest $request, $id) {
	$message = Message::findOrFail($id);
	$message->update($request->all());

	return redirect()->route('mensagens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
	$message = Message::findOrFail($id);
	$message->delete();

	return redirect()->route('mensagens.index');
    }

}
