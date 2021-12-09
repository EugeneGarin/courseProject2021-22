@extends('layouts/layout')

@section('content')

    <section class="mx-auto px-4 max-w-7xl rounded-md py-12">

        <div class="text-center font-bold text-3xl">
            <span class="html-text">&lt;h1&gt; </span>
            <h2 class="inline-block">Персональний кабінет</h2>
            <span class="html-text"> &lt;/h1&gt;</span>
        </div>

        <hr class="my-8 opacity-50">

        <div class="flex flex-col md:flex-row justify-between">

            <div>

                <div class="mt-4 text-2xl block">Персональні дані:</div>

                <div class="mt-4">

                    <span class="html-text">&lt;ul&gt;</span>

                    <ul class="ml-4">
                        <li class="p-1 cursor-pointer hover:filter-invert duration-200 relative">
                            <span class="html-text">&lt;li&gt;</span>
                            <span>Ім'я:&nbsp;</span>
                            <input type="text" value="Євген Гарін" class="p-1 bg-gray-400 bg-opacity-50 rounded-md">
                            <span class="html-text">&lt;/li&gt;</span>
                        </li>
                        <li class="p-1 cursor-pointer hover:filter-invert duration-200 relative">
                            <span class="html-text">&lt;li&gt;</span>
                            <span>Email: </span>
                            <input type="text" value="diterecs@gmail.com" class="p-1 bg-gray-400 bg-opacity-50 rounded-md">
                            <span class="html-text">&lt;/li&gt;</span>
                        </li>
                        <li class="p-1 cursor-pointer hover:filter-invert duration-200 relative">
                            <span class="html-text">&lt;li&gt;</span>
                            <span>Дата реєстрації: 01.09.2021</span>
                            <span class="html-text">&lt;/li&gt;</span>
                        </li>
                    </ul>

                    <span class="html-text">&lt;/ul&gt;</span>

                    <a href="" class="mt-4 px-8 py-1.5 block max-w-max font-bold text-xl cursor-pointer bg-gray-800 rounded-md border border-gray-700 hover:border-gray-800 hover:bg-gray-700 duration-500">Зберегти</a>

                </div>

            </div>

            <div class="mt-12 md:mt-0">

                <div class="mt-4 text-2xl block">Можливості:</div>

                <div class="mt-4">

                    <span class="html-text">&lt;ul&gt;</span>

                    <ul class="ml-4">
                        <li class="p-1 cursor-pointer hover:filter-invert group duration-200 relative">
                            <span class="html-text">&lt;li&gt;</span>
                            <a href="user-profile/archive" class="underline group-hover:no-underline">Переглянути результати тестів</a>
                            <span class="html-text">&lt;/li&gt;</span>
                        </li>
                        <li class="p-1 cursor-pointer hover:filter-invert group duration-200 relative">
                            <span class="html-text">&lt;li&gt;</span>
                            <a href="" class="underline group-hover:no-underline">Змінити пароль</a>
                            <span class="html-text">&lt;/li&gt;</span>
                        </li>
                        <li class="p-1 cursor-pointer hover:filter-invert group duration-200 relative">
                            <span class="html-text">&lt;li&gt;</span>
                            <a href="" class="underline group-hover:no-underline">Вийти</a>
                            <span class="html-text">&lt;/li&gt;</span>
                        </li>
                    </ul>

                    <span class="html-text">&lt;/ul&gt;</span>

                </div>

            </div>

        </div>

    </section>

@endsection
