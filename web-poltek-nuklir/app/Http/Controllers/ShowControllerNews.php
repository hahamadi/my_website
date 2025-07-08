<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_news;

class ShowControllerNews extends Controller
{
    public function show()
    {
        $datas = tb_news::all();
        return view('frontend.tryheader', compact('datas'));
    }

    public function show_head()
    {
        $datas = tb_news::all();
        return view('frontend.tryheader', compact('datas'));
    }
}
