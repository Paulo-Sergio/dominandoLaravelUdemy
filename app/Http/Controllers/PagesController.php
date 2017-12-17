<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageResquest;

class PagesController extends Controller {

    public function home() {
        return view('home');
    }

    public function saudacao($nome) {
        return view('saudacao', compact('nome'));
    }

}
