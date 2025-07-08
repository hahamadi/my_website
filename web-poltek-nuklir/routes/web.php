<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ShowControllerNews;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::get('/', function () {
    return view('welcome');
});
*/



Route::get('/',[TemplateController::class,'index']);

Route::get('/try',[ShowControllerNews::class,'show']);

Route::get('/lang/{idlang}', [LangController::class,'index']);

//Route::get('/allnews',[TemplateController::class,'allnews'])->name('allnews');

Route::controller(TemplateController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/allnews','allnews')->name('allnews');
    Route::get('/allagenda','allagenda')->name('allagenda');
    Route::get('/news/{idnews}','readmore_allnews')->name('allnews.news');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout','destroy')->name('admin.logout');
    Route::get('/admin/profile','profile')->name('admin.profile');
    Route::get('/admin/listnews','ListNews')->name('admin.listnews');
    Route::get('/admin/listagenda','ListAgenda')->name('admin.listagenda');
    Route::get('/admin/addnews','AddNews')->name('admin.addnews');
    Route::get('/admin/addagenda','AddAgenda')->name('admin.addagenda');
    Route::get('/admin/detailNews/{uidnews}','DetailNews')->name('admin.detailnews');
    Route::get('/admin/detailAgenda/{uidagenda}','DetailAgenda')->name('admin.detailagenda');
    Route::get('/admin/updateNews/{uidnews}','UpdateNews')->name('admin.updatenews');
    Route::get('/admin/updateAgenda/{uidagenda}','UpdateAgenda')->name('admin.updateagenda');
    Route::post('/store/profile','StoreProfile')->name('store.profile');
    Route::post('/store/addnews','StoreAddNews')->name('store.addnews');
    Route::post('/store/updatenews','StoreUpdateNews')->name('store.updatenews');
    Route::post('/store/addagenda','StoreAddAgenda')->name('store.addagenda');
    Route::post('/store/updateagenda','StoreUpdateAgenda')->name('store.updateagenda');
    Route::get('/admin/deleteNews/{uidnews}','DeleteNews')->name('admin.deletenews');
    Route::get('/admin/deleteAgenda/{uidagenda}','DeleteAgenda')->name('admin.deleteagenda');
});

Route::get('/dashboard', function () {
    return view('admindashboard.adminpage');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dolpin', function () {
    return view('admindashboard.adminpage');
})->middleware(['auth', 'verified'])->name('dolpin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
