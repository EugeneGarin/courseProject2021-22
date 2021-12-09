@extends('layouts/layout')

@section('content')

    <section class="mx-auto px-4 max-w-7xl rounded-md py-12">

        <div class="text-center font-bold text-3xl">
            <span class="html-text">&lt;h1&gt; </span>
            <h2 class="inline-block">Архів виконаних тестів</h2>
            <span class="html-text"> &lt;/h1&gt;</span>
        </div>

        <hr class="my-8 opacity-50">

        <div>

            <ul class="ml-4">

                @foreach ( $user_quizzes as $user_quiz )

                @php
                    $archived_quiz = $quiz->find($user_quiz->quiz_id)->firstOrFail()->toArray();
                @endphp

                <li class="p-1 cursor-pointer hover:filter-invert duration-200 relative text-center">
                    <a href="/tests/{{ $archived_quiz['slug'] }}" class="absolute top-0 left-0 w-full h-full"></a>
                    <div>Quiz title: {{ $archived_quiz['title'] }}</div>
                    <div>Score: {{ $user_quiz->score }}</div>
                </li>

                <hr class="my-8 mx-auto opacity-50 max-w-xl">

                @endforeach

            </ul>

        </div>

    </section>

@endsection
