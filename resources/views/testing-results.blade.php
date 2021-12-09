@extends('layouts/layout')

@section('content')

    <section class="mx-auto px-4 max-w-7xl rounded-md py-12">

        <div class="text-center font-bold text-3xl">
            <span class="html-text">&lt;h1&gt; </span>
            <h2 class="inline-block">Fullstack Web Developer - Результати тестування</h2>
            <span class="html-text"> &lt;/h1&gt;</span>
        </div>

        <hr class="my-8 opacity-50">

        <div class="text-center">

            <div class="text-2xl">Ваш результат:</div>
            <div class="mx-auto mt-4 border-8 rounded-full w-28 h-28 flex justify-center items-center border-yellow-200 font-bold text-2xl">74/100</div>
            <div class="mt-4 text-xl">Ви маєте досить непогані навички програмування у сферах з якими працюєте, але вам треба ще трошки підтягнути ваші знання ;)</div>

        </div>

        <?php echo "<pre>"; var_dump( $_GET ); echo "</pre>"; ?>

    </section>

@endsection
