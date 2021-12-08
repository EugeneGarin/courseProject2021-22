<header class="px-4 py-6 h-32 bg-gray-800 relative text-white bg-opacity-70">

    <div class="mx-auto max-w-7xl flex justify-center">

        <div class="flex-grow">
            <a href="{{ URL::to('/') }}" class="mx-auto flex justify-center items-center h-full cursor-pointer w-max">
                <img class="w-14 h-14" src="{{ asset('img/site-logo.svg') }}" alt="Logo">
                <div class="max-w-min ml-4 font-mono leading-7 font-bold text-3xl">Web Dev Tests</div>
            </a>
        </div>

        <div x-data="{ isUserMenuOpen: false }" @mouseenter="isUserMenuOpen = true" @mouseleave="isUserMenuOpen = false" >

            <div class="relative">

                <div class="text-xl flex items-baseline cursor-pointer">

                    <div>
                        <img class="w-4 h-4" src="{{ asset('img/arrow-down-glyph.svg') }}" alt="">
                    </div>

                    <div class="ml-2">Євген</div>

                </div>

                <div x-cloak x-show="isUserMenuOpen" class="mt-2 absolute top-full left-0 w-80">
                    <ul>
                        <li><a href="">Персональний кабінет</a></li>
                        <li><a href="">Вийти</a></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>

</header>