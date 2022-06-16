<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\NoteController;
use App\Models\course;
use App\Models\unit;
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

Route::get('/nologin', function ($nl) {    
    return view('nologin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/course', CourseController::class);
Route::resource('/unit', UnitController::class);
Route::resource('/note', NoteController::class);


Route::get('/course/{id}', function ($id) {
    $course_id = course::select("coid","name")->where('parent_id',$id)->get()->toArray();
    if(count($course_id)!=0){
        $course_id[0]['content']=course::select("coid")->where('parent_id',$course_id[0]['coid'])->get()->toArray();
    }

    return json_encode($course_id);

    //return view('welcome');
});

Route::get('/course/{id}',[CourseController::class, 'coid']);

Route::get('/course/{coid}/{unit?}',function ($coid,$unid=null) {
    if($unid == null){
        return view('unit.index');
    }else{
        $unit = unit::select("unid")->where('');
        return view('unit.show' , $unid);
    }
    
});
