<?php

use Illuminate\Support\Facades\Route;
use App\Events\message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\msg;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data= msg::all();
    return view('welcome',['dat'=>$data]);
});

Route::post('send-message', function(Request $req)
{
    event(new Message($req->input('username'),$req->input('message')));
    $msg= new msg;
    $msg->username=$req->username;
    $msg->message=$req->messages;
    $msg->save();
    return ["success" => true];
});