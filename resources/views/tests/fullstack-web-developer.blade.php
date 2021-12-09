@extends('layouts/layout')

@section('content')

    <section class="mx-auto px-4 max-w-7xl rounded-md py-12">

        <div class="text-center font-bold text-3xl">
            <span class="html-text">&lt;h1&gt; </span>
            <h2 class="inline-block">Fullstack Web Developer Test</h2>
            <span class="html-text"> &lt;/h1&gt;</span>
        </div>

        <hr class="my-8 opacity-50">

        <div>

            <form id="test-form" action="/testing-results" method="POST">

                <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">

                @csrf

                <ol>

                    @foreach ( $quiz->questions as $key => $question )

                        <li class="mt-4">

                            <h3 class="text-2xl block">{{ $key + 1 }}. {{ $question->title }}</h3>

                            <div class="mt-4">

                                <input type="hidden" name="answers[{{ $key }}][question_id]" value="{{ $question->id }}">
                                <input type="hidden" name="answers[{{ $key }}][question_title]" value="{{ $question->title }}">

                                @foreach ( $question->variants as $variant_key => $variant )

                                    <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                        <input type="radio" value="{{ $variant->id }}" name="answers[{{ $key }}][selected_variant_id]">
                                        <span>{{ $variant->title }}</span>
                                    </label>

                                    <input type="hidden" name="answers[{{ $key }}][selected_variant_title]" value="{{ $variant->title }}">
                                    <input type="hidden" name="answers[{{ $key }}][variants][{{ $variant_key }}][title]" value="{{ $variant->title }}">
                                    <input type="hidden" name="answers[{{ $key }}][variants][{{ $variant_key }}][id]" value="{{ $variant->id }}">


                                @endforeach

                            </div>

                            @if (! $loop->last)

                                <hr class="my-8 opacity-50">

                            @endif

                        </li>

                    @endforeach

                </ol>

                <input type="submit" value="Підтвердити" class="mt-12 px-8 py-1.5 font-bold text-2xl cursor-pointer bg-gray-800 rounded-md border border-gray-700 hover:border-gray-800 hover:bg-gray-700 duration-500">

            </form>

        </div>

    </section>

@endsection
