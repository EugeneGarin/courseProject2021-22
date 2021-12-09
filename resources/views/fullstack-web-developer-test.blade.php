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

            <form id="test-form" action="/testing-results" method="GET">

                <ol>

                    <li class="mt-4">

                        <h3 class="text-2xl block">1. Скільки типів даних у РНР?</h3>

                        <div class="mt-4">

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="5" name="question-id-1">
                                <span>5</span>
                            </label>

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="8" name="question-id-1">
                                <span>8</span>
                            </label>

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="10" name="question-id-1">
                                <span>10</span>
                            </label>

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="12" name="question-id-1">
                                <span>12</span>
                            </label>

                        </div>

                    </li>

                    <hr class="my-8 opacity-50">

                    <li class="mt-4">

                        <h3 class="text-2xl block">2. Чи є різниця між одинарними та подвійними лапками у PHP?</h3>

                        <div class="mt-4">

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="Так" name="question-id-2">
                                <span>Так</span>
                            </label>

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="Ні" name="question-id-2">
                                <span>Ні</span>
                            </label>

                        </div>

                    </li>

                    <hr class="my-8 opacity-50">

                    <li class="mt-4">

                        <h3 class="text-2xl block">3. Динамічна змінна це:</h3>

                        <div class="mt-4">

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="Змінна що бере назву змінної та розглядає її як своє значення" name="question-id-3">
                                <span>Змінна що бере назву змінної та розглядає її як своє значення</span>
                            </label>

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="Змінна що динамічно генерується випадковим чином" name="question-id-3">
                                <span>Змінна що динамічно генерується випадковим чином</span>
                            </label>

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="Змінна що бере значення змінної та розглядає його як ім'я змінної" name="question-id-3">
                                <span>Змінна що бере значення змінної та розглядає його як ім'я змінної</span>
                            </label>

                        </div>

                    </li>

                    <hr class="my-8 opacity-50">

                    <li class="mt-4">

                        <h3 class="text-2xl block">4. Що таке шаблони (патерни) проектування?</h3>

                        <div class="mt-4">

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="Модель вирішення завдань, що не повторюються" name="question-id-4">
                                <span>Модель вирішення завдань, що не повторюються</span>
                            </label>

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="Модель вирішення завдань, що багаторазово повторюється" name="question-id-4">
                                <span>Модель вирішення завдань, що багаторазово повторюється</span>
                            </label>

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="Модель вирішення завдань, що не можуть бути вирішені звичайними методами проектування" name="question-id-4">
                                <span>Модель вирішення завдань, що не можуть бути вирішені звичайними методами проектування</span>
                            </label>

                        </div>

                    </li>

                    <hr class="my-8 opacity-50">

                    <li class="mt-4">

                        <h3 class="text-2xl block">5. Які ще є парадигми (моделі, підходи) програмування, крім ООП?</h3>

                        <div class="mt-4">

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="Функціональна та процедурна" name="question-id-5">
                                <span>Функціональна та процедурна</span>
                            </label>

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="Аспектно-орієнтована" name="question-id-5">
                                <span>Аспектно-орієнтована</span>
                            </label>

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="Усі варіанти вірні" name="question-id-5">
                                <span>Усі варіанти вірні</span>
                            </label>

                        </div>

                    </li>

                    <hr class="my-8 opacity-50">

                    <li class="mt-4">

                        <h3 class="text-2xl block">6. Потрібно за допомогою alert() вивести якесь повідомлення через 3 секунди після запуску скрипта. Як це зробити?</h3>

                        <div class="mt-4">

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="setTimeout( function(){ alert('Hello'); }, 3000 );" name="question-id-6">
                                <span>setTimeout( function(){ alert('Hello'); }, 3000 );</span>
                            </label>

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="sleep( 3000, function(){ alert('Hello'); } );" name="question-id-6">
                                <span>sleep( 3000, function(){ alert('Hello'); } );</span>
                            </label>

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="setTimeout( 3000, function(){ alert('Hello'); } );" name="question-id-6">
                                <span>setTimeout( 3000, function(){ alert('Hello'); } );</span>
                            </label>

                        </div>

                    </li>

                    <hr class="my-8 opacity-50">

                    <li class="mt-4">

                        <h3 class="text-2xl block">7. У чому різниця між записом #my та .my?</h3>

                        <div class="mt-4">

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="#my – селектор класу, а .my – селектор ID." name="question-id-7">
                                <span>#my – селектор класу, а .my – селектор ID.</span>
                            </label>

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="#my – селектор ID, а .my – селектор класу." name="question-id-7">
                                <span>#my – селектор ID, а .my – селектор класу.</span>
                            </label>

                            <label class="block p-1 cursor-pointer hover:filter-invert duration-200">
                                <input type="radio" value="Немає вірної відповіді" name="question-id-7">
                                <span>Немає вірної відповіді</span>
                            </label>

                        </div>

                    </li>

                </ol>

                <input type="submit" value="Submit" class="mt-12 px-8 py-1.5 font-bold text-2xl cursor-pointer bg-gray-800 rounded-md border border-gray-700 hover:border-gray-800 hover:bg-gray-700 duration-500">

            </form>

        </div>

    </section>

@endsection
