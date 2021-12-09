@extends('layouts/layout')

@section('content')

    {{-- <?php dd($questions); echo "<pre>"; var_dump( $request->input() ); echo "</pre>"; ?> --}}

    <section class="mx-auto px-4 max-w-7xl rounded-md py-12">

        <div class="text-center font-bold text-3xl">
            <span class="html-text">&lt;h1&gt; </span>
            <h2 class="inline-block">Fullstack Web Developer - Результати тестування</h2>
            <span class="html-text"> &lt;/h1&gt;</span>
        </div>

        <hr class="my-8 opacity-50">

        <ol>

            @php
                $correct_answer_number = 0;
            @endphp

            @foreach ( $request->input()['answers'] as $key => $answer )

                @php
                    $is_correct_answer = false;
                @endphp

                @if ( array_key_exists( 'selected_variant_id', $answer ) && $questions[ $answer['question_id'] ][0]['correct_variant_id'] == $answer['selected_variant_id'] )

                    @php
                        $is_correct_answer = true;
                        $correct_answer_number++;
                    @endphp

                @endif

                <li class="mt-4">

                    <h3 class="text-2xl block <?php echo $is_correct_answer ? 'text-green-400' : 'text-red-600'; ?>">{{ $key + 1 }}. {{ $answer['question_title'] }}</h3>

                    <div class="mt-4">

                        @foreach ( $answer['variants'] as $variant )

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200" x-data={} @click="event.preventDefault();">
                                <input type="radio"
                                @if ( array_key_exists( 'selected_variant_id', $answer ) && $variant['id'] == $answer['selected_variant_id'] )
                                    checked
                                @endif
                                >
                                <span>{{ $variant['title'] }}</span>
                            </label>

                        @endforeach

                    </div>

                    @if (! $loop->last)

                        <hr class="my-8 opacity-50">

                    @endif

                </li>

            @endforeach

        </ol>

        @php
            $overall_questions_number = count( $request->input()['answers'] );
            $score = round ( ( $correct_answer_number / $overall_questions_number ) * 100 );
        @endphp

        <div class="text-center">

            <div class="text-2xl">Ваш результат:</div>
            <div class="mx-auto mt-4 border-8 rounded-full w-28 h-28 flex justify-center items-center <?php if ( $score < 50 ) echo 'border-red-600'; elseif ( $score < 70 ) echo 'border-yellow-200'; else echo 'border-green-400'; ?> font-bold text-2xl">{{ $score }}/100</div>

            <a href="/" class="mt-8 mx-auto px-8 py-1.5 block max-w-max font-bold text-2xl cursor-pointer bg-gray-800 rounded-md border border-gray-700 hover:border-gray-800 hover:bg-gray-700 duration-500">Повернутись на головну сторінку</a>

        </div>

    </section>

@endsection
