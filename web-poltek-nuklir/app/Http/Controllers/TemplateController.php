<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_news;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use DB;

class TemplateController extends Controller
{
    public function index()
    {
        $datas = tb_news::orderBy('date_now', 'desc')->take(3)->get();
        $MtNow = date("n");
        $datasAgenda = DB::table('tb_agenda')->whereRaw('MONTH(startdate_event) ='.$MtNow)->take(3)->get();

        return view('frontend.home', compact('datas','datasAgenda')); 
    }

    public function index_try()
    {
        return view('frontend.try'); 
    }

    public function allnews()
    {
        $datas = tb_news::orderBy('date_now', 'desc')->paginate(6);
        return view('frontend.allnews', compact('datas'));
    }

    public function readmore_allnews(Request $request, $idnews)
    {
        $datas = tb_news::where('uid','=',$idnews)->get();
        return view('frontend.readmorenews', compact('datas'));
    }

    public function allagenda()
    {
        $datas = DB::table('tb_agenda')->orderBy('startdate_event', 'desc')->paginate(6);
        return view('frontend.allagenda', compact('datas'));
    }
}
