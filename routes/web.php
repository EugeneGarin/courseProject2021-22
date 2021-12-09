<?php

use App\Models\Quiz;
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
            'questions' => $quiz->questions,
        ]);
    }

});

Route::get('testing-results', function () {

    return view('testing-results');

});
