<?php
use Illuminate\Support\Facades\Route;
use App\Http\controllers\StudentsController;
use App\Http\controllers\StudentsDetailController;
use App\Http\controllers\TeachersController;
use App\Models\Teacher;
use App\Models\StudentsDetail;

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


Route::get('/teachers', function () {
    return view('teacher');
});

Route::get('/sample', function () {
    return view('teachers.studentsDetail');
});

Route::get('/reg2',  [StudentsController::class, 'create'])->name('registration');

Route::post('/student/insert',  [StudentsDetailController::class, 'insert'])->name('student.insert');


Route::get('/abc', [TeacherController::class, 'insert'])->name('abcd');


Route::get('/abcd', function () {
    $teachers = Teacher::all();
    return view('teachers.registration', ['animals' => $teachers]);  
});

Route::get('insert','StudentsDetailController@insertform');
Route::post('create','StudentsDetailController@insert');