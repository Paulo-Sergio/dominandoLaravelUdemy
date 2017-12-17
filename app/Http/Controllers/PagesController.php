<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageResquest;

class PagesController extends Controller {

    public function home() {
        return view('home');
    }

    public function contato() {
        return view('contato');
    }

    public function saudacao($nome) {
        return view('saudacao', compact('nome'));
    }

    public function mensagens(CreateMessageResquest $request) {
        $data = $request->all();
        return redirect()
                        ->route('contato')
                        ->with('info', 'Mensagem enviada! :)');
    }

}
