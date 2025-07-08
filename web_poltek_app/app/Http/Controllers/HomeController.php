<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_news;
use App\Models\tb_agenda;
use DB;


class HomeController extends Controller
{
    public function index()
    {
        $news = tb_news::orderBy('date', 'desc')->take(3)->get();
        $agendas = DB::table('tb_agenda')->whereRaw('date_start >= CURDATE()')->orderBy('date_start', 'asc')->take(3)->get();

        return view('HomePage/home', compact('news','agendas'));
    }

    public function allnews()
    {
        $datas = tb_news::orderBy('date', 'desc')->paginate(6);

        return view('HomePage/allnews', compact('datas'));
    }
    
    public function readmore_allnews(Request $request, $idnews)
    {
        $datas = tb_news::where('uid','=',$idnews)->get();
        return view('HomePage/news', compact('datas'));
    }
    
} 
