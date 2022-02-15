<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

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
    $token = auth()->attempt(['email' => $request->email, 'password' => $request->password], true);
    if (!$token) {
        session()->flash('error', 'Invalid details');
        return redirect()->to('login');
    }
    return redirect()->to('dashboard');
})->name('login');

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Auth::logout();
    return view('login');
});

Route::post('/signup', function (Request $request) {
    $level = 1;
    $request->validate([
        'fullname' => "required",
        'email' => "email|required|unique:users",
        'password' => "required|min:8|max:40"
    ]);
    $user = User::create([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'level' => $level,
        'password' => Hash::make($request->password),
    ]);
    $code = mt_rand(100000, 900000);
    DB::table('otps')->insert([
        'user_id' => $user->id,
        'code' => $code,
        'created_at' => now(),
        'updated_at' => now(),
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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/completeReg', function (Request $request) {
    $imageName = mt_rand(1000, 9000);
    $extension = $request->image->extension();
    $image = $imageName . '.' . $extension;
    $myimage = 'images';
    $saveImage = $myimage . '/' . $image;
    $path = $request->image->storeAs('public/' . $myimage, $image);
    $request->validate([
        'dob' => "required",
        'country' => "required",
        'state' => "required",
        'phoneno' => "required",
        'nok' => "required",
        'addressNok' => "required",
        'phoneNok' => "required",
        'program' => "required",
        'image' => "required",
    ]);
    $complete = DB::table('users')->where([['id', $request->user()->id]])->update(
        [
            'dob' => $request->dob,
            'country' => $request->country,
            'state' => $request->state,
            'phoneno' => $request->phoneno,
            'nok' => $request->nok,
            'addressNok' => $request->addressNok,
            'phoneNok' => $request->phoneNok,
            'program' => $request->program,
            'image' => $saveImage,
        ]
    );
    if ($complete) {
        return redirect()->to('dashboard');
    }
})->name('comleteReg');

Route::get('/completeReg', function () {
    return view('dashboard');
});
Route::get('/dashHome', function () {
    return view('dashHome');
});

Route::post('/verify', function (Request $request) {
    $token = DB::table('otps')->where('user_id', auth()->user()->id)->get('code');
    if ($token[0]->code == $request->realToken) {
        $taken = DB::table('users')->where([['id', auth()->user()->id]])->update([
            'email_verified_at' => now()
        ]);
        if ($taken) {
            return redirect()->to('dashboard');
        }
    } else {
        return "<a href='http://127.0.0.1:8000/verify'>Invalid token submitted, Click here to verify your email again</a>";
    }
});

Route::get('/verify', function () {
    return view('verify');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/completeReg', function () {
        $userPic = auth()->user()->image;
        $url = Storage::url($userPic);
        return view('userReg')->with(['data' => auth()->user(), 'picture' => $url]);
    });
    Route::get('/courseReg', function () {
        $payment = DB::table('payment')->where([['user_id', auth()->user()->id], ['level', auth()->user()->level]])->get();
        // $level = Carbon::parse(Carbon::now())->diffInMonths(Carbon::parse(auth()->user()->created_at));
        $course = DB::table('course')->where([['level', auth()->user()->level], ['program', auth()->user()->program]])->get();
        $regCourse = DB::table('coursereg')->where([['user_id', auth()->user()->id], ['level', auth()->user()->level]])->get();
        return view('courseReg')->with(['course' => $course, 'regCourse' => $regCourse, 'payment' => $payment, 'level' => auth()->user()->level]);
    });
    Route::post('/courseReg', function (Request $request) {
        $request->validate([
            'course' => "required|",
        ]);
        DB::table('coursereg')->insert([
            'user_id' => auth()->user()->id,
            'courseCode' => $request->courseCode,
            'courseTitle' => $request->courseTitle,
            'level' => $request->level,
            'unit' => $request->unit,
            'created_at' => now(),
        ]);
        return redirect()->to('dashboard/courseReg');
    });

    Route::get('/timetable', function () {
        $timetable = DB::table('timetable')->where([['program', auth()->user()->program], ['level', auth()->user()->level]])->get();
        return view('timetable')->with(['timetable' => $timetable]);
    });
    Route::post('/payment', function (Request $request) {
        $paid = DB::table('payment')->insert([
            'user_id' => auth()->user()->id,
            'level' => auth()->user()->level,
            'amount' => $request->amount,
            'reference' => $request->reference,
            'payment_date' => now()
        ]);
        if ($paid) {
            session()->flash('success', 'You paid your fees successfully !');
            return redirect()->to('dashboard/payment');
        }
    });
    Route::get('/payment', function () {
        $payment = DB::table('payment')->where([['user_id', auth()->user()->id]])->get();
        $paymentInfo = DB::table('paymentinfo')->where([['level', auth()->user()->level]])->get();
        return view('payment')->with(['userInfo' => auth()->user(), 'paymentInfo' => $paymentInfo, 'payment' => $payment, 'email' => auth()->user()->email]);
    });
    Route::post('/paymentError', function () {
        session()->flash('error', 'Something went wrong. Please try again!');
        return redirect()->to('dashboard/payment');
    });
    Route::post('/assignment', function (Request $request) {
        $request->validate([
            'answer' => "required"
        ]);
        $fileName = auth()->user()->fullname . mt_rand(1000, 9000);
        $extension = $request->answer->extension();
        $assignment = $fileName . '.' . $extension;
        $path = $request->answer->storeAs('/public/submission', $assignment);
        $complete = DB::table('submission')->insert(
            [
                'student' => auth()->user()->fullname,
                'user_id' => auth()->user()->id,
                'courseCode' => $request->courseCode,
                'lecturer' => $request->lecturer,
                'question' => $request->question,
                'tag' => $request->tag,
                'file' => $path,
            ]
        );
        if ($complete) {
            return redirect()->to('dashboard/assignment');
        }
    });
    Route::get('/assignment', function () {
        $submission = DB::table('submission')->where('student', auth()->user()->fullname)->get();
        $assignment = DB::table('assignment')->where('level', auth()->user()->level)->get();
        return view('assignment')->with(['assignment' => $assignment, 'submit' => $submission]);
    });

    Route::post('/result', function (Request $request) {
        $request->validate([
            'level' => 'required'
        ]);
        return redirect()->to('dashboard/result');
    });

    Route::get('/result', function () {
        $presentResult = DB::table('result')->where([['name', auth()->user()->fullname], ['user_id', auth()->user()->id], ['level', auth()->user()->level]])->get();
        $allResult = DB::table('result')->where([['name', auth()->user()->fullname], ['user_id', auth()->user()->id]])->get();
        return view('result')->with(['allResult' => $allResult, 'presentResult' => $presentResult]);
    });
});

// Route::prefix('instructor')->group(function () {
//     Route::get('/login', function () {
//         return view('instructor/instructLogin');
//     });

//     Route::post('/login', function (Request $request) {
//         $instructor = [['email' => 'scictinstructor@scict.com', 'password' => 'scictinstructor'], ['email' => 'scict2instructor@scict.com', 'password' => 'scict2instructor']];
//         $a = 0;
//         while ($a <= $instructor) {
//             if ($instructor[$a]['email'] == $request->email && $instructor[$a]['password'] == $request->password) {
//                 return "welcome";
//             } else {
//                 session()->flash('error', "Invalid details");
//                 return redirect()->to('instructor/login');
//             }
//         }
//         $request->validate([
//             'email' => 'required|email',
//             'password' => 'required',
//         ]);
//     })->name('login');
// });
