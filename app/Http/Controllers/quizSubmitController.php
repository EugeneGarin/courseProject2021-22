<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class quizSubmitController extends Controller
{
    public function submit(Request $request)
    {

        $quiz = Quiz::find( intval( $request->input()['quiz_id'] ) );

        return view('/testing-results', [
            'request' => $request,
            'questions' => $quiz->questions->groupBy('id')->toArray(),
        ]);
    }
}
