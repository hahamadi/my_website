<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\tb_news;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use DB;

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admindashboard.edit_profile', compact('adminData'));
    }

    public function StoreProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->username;
        $data->email = $request->email;

        if ($request->file('profile_image')){
            $file = $request->file('profile_image');
            //$filename = date('YmdHi').$file->getClientOriginalName();
            $filename = "profile_pict_".$id.".".$file->getClientOriginalExtension();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_image'] = $filename;
        }

        $data->save();
        return redirect()->route('admin.profile');
    }

    public function ListNews()
    {
        $datas = tb_news::orderBy('date_now', 'desc')->get();
        return view('admindashboard.listnews', compact('datas'));
    }

    public function AddNews()
    {
        return view('admindashboard.addnews');
    }

    public function StoreAddNews(Request $request)
    {
        //dd($request->all());
        $digits = 3;
        $num = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
        $uid = "news".strval($num).$request->alias_news;
        //dd($uid);
        $DateNow = now()->format('Y-m-d H:i:s');
        $data = array('uid'=>$uid,'writer'=>$request->writer_news,'date'=>$request->date_news, 'title'=>$request->title_news,
        'highlight'=>$request->highlight_news, 'containt'=>$request->content_news, 'date_now'=>$DateNow, 
        'image'=>$request->link_img_news, 'alias'=>$request->alias_news);
        DB::table('tb_news')->insert($data);
        return redirect()->route('admin.listnews');

    }
    public function DetailNews(Request $request, $uidnews)
    {
        $datas = tb_news::where('uid','=',$uidnews)->get();
        //dd($datas);
        return view('admindashboard.detailnews', compact('datas'));
    }
    public function UpdateNews(Request $request, $uidnews)
    {
        $datas = tb_news::where('uid','=',$uidnews)->get();
        return view('admindashboard.updatenews', compact('datas'));
    }
    public function StoreUpdateNews(Request $request)
    {
        //dd($request->all());
        $DateNow = now()->format('Y-m-d H:i:s');
        $data = array('writer'=>$request->writer_news,'date'=>$request->date_news, 'title'=>$request->title_news,
        'highlight'=>$request->highlight_news, 'containt'=>$request->content_news, 'date_now'=>$DateNow, 
        'image'=>$request->link_img_news, 'alias'=>$request->alias_news);
        DB::table('tb_news')->where('uid',$request->uid_news)->update($data);
        return redirect()->route('admin.detailnews',$request->uid_news);
    }
    public function DeleteNews(Request $request, $uidnews)
    {
        //dd($uidnews);
        DB::table('tb_news')->where('uid',$uidnews)->delete();
        return redirect()->route('admin.listnews');
    }


    public function ListAgenda()
    {
        $datas = DB::table('tb_agenda')->orderBy('startdate_event', 'desc')->get();
        return view('admindashboard.listagenda', compact('datas'));
    }
    public function AddAgenda()
    {
        $id = Auth::user()->id;
        $dataUser = User::find($id);
        return view('admindashboard.addagenda', compact('dataUser'));
    }

    public function StoreAddAgenda(Request $request)
    {
        //dd($request->all());
        $digits = 3;
        $num = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
        $uid = "agnd".strval($num).$request->alias_news;
        //dd($request->all());
        //dd($uid);
        $DateNow = now()->format('Y-m-d H:i:s');
        $data = array('uid'=>$uid,'name'=>$request->name_agenda, 'description'=>$request->desc_agenda, 'startdate_event'=>$request->date_start_agenda,'enddate_event'=>$request->date_end_agenda,'time'=>$request->time_agenda,
        'link_img'=>$request->link_img_agenda, 'location'=>$request->loc_agenda, 'id_user'=>$request->alias_agenda);
        DB::table('tb_agenda')->insert($data);
        return redirect()->route('admin.listagenda');

    }
    public function DetailAgenda(Request $request, $uidagenda)
    {
        $datas = DB::table('tb_agenda')->where('uid','=',$uidagenda)->get();
        //dd($datas);
        return view('admindashboard.detailagenda', compact('datas'));
    }
    public function UpdateAgenda(Request $request, $uidagenda)
    {
        $id = Auth::user()->id;
        $dataUser = User::find($id);

        $datas = DB::table('tb_agenda')->where('uid','=',$uidagenda)->get();
        return view('admindashboard.updateagenda', compact('datas','dataUser'));
    }
    public function StoreUpdateAgenda(Request $request)
    {
        //dd($request->all());
        $DateNow = now()->format('Y-m-d H:i:s');
        $data = array('uid'=>$request->uid_agenda,'name'=>$request->name_agenda, 'description'=>$request->desc_agenda, 'startdate_event'=>$request->date_start_agenda,'enddate_event'=>$request->date_end_agenda,'time'=>$request->time_agenda,
        'link_img'=>$request->link_img_agenda, 'location'=>$request->loc_agenda, 'id_user'=>$request->alias_agenda);
        DB::table('tb_agenda')->where('uid',$request->uid_agenda)->update($data);
        return redirect()->route('admin.detailagenda',$request->uid_agenda);
    }
    public function DeleteAgenda(Request $request, $uidagenda)
    {
        //dd($uidnews);
        DB::table('tb_agenda')->where('uid',$uidagenda)->delete();
        return redirect()->route('admin.listagenda');
    }
}
