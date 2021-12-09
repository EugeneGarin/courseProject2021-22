<?php

use App\Http\Controllers\quizSubmitController;
use App\Models\Quiz;
use App\Models\User;
use App\Models\User_quiz;
use App\Models\User_response;
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
    return view('homepage');
});

Route::get('tests/{quiz:slug}', function (Quiz $quiz) {

    if ( view()->exists( 'tests/'.$quiz->slug ) ) {

        return view('tests/'.$quiz->slug, [
            'quiz' => $quiz,
        ]);

    } else abort(404);

});

Route::post('/testing-results', [quizSubmitController::class, 'submit']);

Route::get('/user-profile', function () { return view('user-profile'); });

Route::get('/user-profile/archive', function () {

    return view('results-archive', [
        'user_quizzes' => User_quiz::where('user_id', '1')->get(),
        'quiz' => Quiz::all(),
        'user_responses' => User_response::where('user_id', '1')->get(),
    ]);

});