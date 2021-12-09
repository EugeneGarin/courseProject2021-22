<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User_quiz;
use App\Models\User_response;
use Illuminate\Http\Request;

class quizSubmitController extends Controller
{
    public function submit(Request $request)
    {

        $quiz = Quiz::find( intval( $request->input()['quiz_id'] ) );

        $user_quiz = new User_quiz;
        $user_quiz->user_id = '1';
        $user_quiz->quiz_id = intval( $request->input()['quiz_id'] );
        $user_quiz->save();

        // dd($quiz->questions::where(''));

        // Save each answer in the DB
        foreach( $request->answers as $answer ) {

            // echo '<pre>'; var_dump($quiz->questions->where('id', $answer['question_id'] )->firstOrFail()->toArray()['correct_variant_id']); echo '</pre>';
            $user_response = new User_response;
            $user_response->user_id = '1';
            $user_response->user_quiz_id = $user_quiz->id;
            $user_response->question_id = $answer['question_id'];
            $user_response->selected_variant_id = array_key_exists( 'selected_variant_id', $answer  ) ? intval( $answer['selected_variant_id'] ) : null;
            $user_response->correct_variant_id = $quiz->questions->where('id', $answer['question_id'] )->firstOrFail()->toArray()['correct_variant_id'];
            // $user_response->is_correct = array_key_exists( 'selected_variant_id', $answer  ) ? $answer['selected_variant_id'] == $quiz->questions->where('id', $answer['question_id'] )->firstOrFail()->toArray()['correct_variant_id'] : null;
            $user_response->save();

        }

        return view('/testing-results', [
            'request' => $request,
            'questions' => $quiz->questions->groupBy('id')->toArray(),
        ]);
    }
}
