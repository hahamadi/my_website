<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function index(Request $request, $idlang)
      {
          //create a language session, by default it uses english
          session()->put('language', Request('language') ?? $idlang);
          return view('lang');
      }
}
