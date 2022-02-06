<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

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
    return view('welcome')->with(['text' => 'Technology, the present state of World Education']);
});

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => "email|required|",
        'password' => "required",
    ]);
    $token=auth()->attempt(['email'=>$request->email, 'password'=>$request->password], true);
        if(!$token){
         session()->flash('error','Invalid details');
         return redirect()->to('login');
        }
        return redirect()->to('dashboard');

})->name('login');

Route::get('/login', function () {
    return view('login');
});

Route::post('/signup', function (Request $request) {
    $request->validate([
        'fullname' => "required",
        'email' => "email|required|unique:users",
        'password' => "required|min:8|max:40"
    ]);
    $user = User::create([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
    $code=mt_rand(100000, 900000);
    DB::table('otps')->insert([
        'user_id'=>$user->id,
         'code'=>$code,
         'created_at'=>now(),
         'updated_at'=>now(),
       ]);
    Auth::loginUsingId($user->id);
    return "<a href='http://127.0.0.1:8000/verify'>YOUR OTP is <b>$code</b>Click here to verify your email</a>";
//    $message="Hello ".$request->name.", click this link to verify your email"."<a href='http://127.0.0.1:8000/emailVerification'>VERIFY EMAIL</a>";
//    $data=['name'=> "Ebenezer", 'subject'=>'EMAIL VERIFICATION', 'view'=>'alert', 'message'=>$message];
//    $r=new alert($data);
//    Mail::to($request->email)->send($r);
//    return redirect()->back();
//    return redirect()->to('home');
})->name('signup');

Route::get('/signup', function () {
    return view('signup');
});
