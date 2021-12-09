@extends('layouts/layout')

@section('content')

    <section class="mx-auto px-4 max-w-7xl rounded-md py-12">

        <div class="text-center font-bold text-3xl">
            <span class="html-text">&lt;h1&gt; </span>
            <h2 class="inline-block">Тести для web-розробників</h2>
            <span class="html-text"> &lt;/h1&gt;</span>
        </div>

        <hr class="my-8 opacity-50">

        <div>

            <div class="mt-4 text-2xl block">Список доступних тестів:</div>

            <div class="mt-4">

                <span class="html-text">&lt;ul&gt;</span>

                <ul class="ml-4">
                    <li class="p-1 cursor-pointer hover:filter-invert duration-200 relative">
                        <a href="/tests/fullstack-web-developer-test" class="absolute top-0 left-0 w-full h-full"></a>
                        <span class="html-text">&lt;li&gt;</span>
                        <span>Fullstack Web Developer</span>
                        <span class="html-text">&lt;/li&gt;</span>
                    </li>
                    <li class="p-1 cursor-pointer hover:filter-invert duration-200 relative">
                        <a href="" class="absolute top-0 left-0 w-full h-full"></a>
                        <span class="html-text">&lt;li&gt;</span>
                        <span>CMS WordPress Developer</span>
                        <span class="html-text">&lt;/li&gt;</span>
                    </li>
                    <li class="p-1 cursor-pointer hover:filter-invert duration-200 relative">
                        <a href="" class="absolute top-0 left-0 w-full h-full"></a>
                        <span class="html-text">&lt;li&gt;</span>
                        <span>Shopify Platform Developer</span>
                        <span class="html-text">&lt;/li&gt;</span>
                    </li>
                </ul>

                <span class="html-text">&lt;/ul&gt;</span>

            </div>

        </div>

    </section>

@endsection
