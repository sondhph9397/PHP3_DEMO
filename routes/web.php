<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;
// dùng request để nhận dữ liêu gửi lên
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::get('/students', function () {
    //sử dụng query builer 
    // return DB::table('students')->where('id','=',26)->get();
    //lấy ra mảng students
    // $students = DB::table('students')->get();
    //lấy ra riêng 1 students
    $students = DB::table('students')->find(26);

    //truyền vào mảng [tên biến view nhận đc => giá trị $students]
    return view('students.detail', ['studentsValue' => $students]);
});


//giá trị truyền vài tương ứng với tham số function
Route::get('/students/{id}/{age}', function ($id, $number) {
    dd('gia tri truyen vao url la: ' . $id . ' va ' . $number);
});

Route::get('/students/detail', function () {
    return view('students.detail');
});

//cách số 2:
Route::view('/students/detail-2', 'students.detail');

//tạo đường dẫn và truy vấn
Route::get('/students-list', function () {
    //truy vấn
    $students = DB::table('students')->orderBy('id', 'desc')->get();

    return view('students.list', ['list' => $students]);
})->name('students-list');

Route::get('/login', function () {
    return view('login');
})->name('get-login');

Route::post('/post-login', function (Request $request) {
    // dd($request->all());
    $username = $request->username;
    //thực hiện truy vấn theo giá trị vừa gửi lên
    $students = DB::table('students')->where('name', 'like', "%$username%")->first();
    //nếu có student thì sẽ rediẻct sang student-list
    if ($students) {
        return redirect()->route('students-list');
    }
    // nếu không thì quay lại login
    return redirect()->route('get-login');
    
})->name('post-login');
