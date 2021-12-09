<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('questions')->delete();
        DB::table('variants')->delete();
        DB::table('quizzes')->delete();

        DB::table('users')->insert([
            'name' => 'Євген Гарін',
            'email'  => 'diterecs@gmail.com',
            'password'  => hash('md5', '123456789'),
        ]);


        DB::table('quizzes')->insert([
            'id'    => 1,
            'title' => 'Fullstack Web Developer',
            'slug'  => 'fullstack-web-developer',
        ]);


        DB::table('variants')->insert([
            'id'            => 1,
            'title'  => '5',
            'question_id'   => 1,
        ]);

        DB::table('variants')->insert([
            'id'            => 2,
            'title'  => '8',
            'question_id'   => 1,
        ]);

        DB::table('variants')->insert([
            'id'            => 3,
            'title'  => '10',
            'question_id'   => 1,
        ]);

        DB::table('variants')->insert([
            'id'            => 4,
            'title'  => '12',
            'question_id'   => 1,
        ]);

        DB::table('questions')->insert([
            'id'                    => 1,
            'title'         => 'Скільки типів даних у РНР?',
            'correct_variant_id'    => 3,
            'quiz_id'               => 1,
        ]);


        DB::table('variants')->insert([
            'id'            => 5,
            'title'  => 'Так',
            'question_id'   => 2,
        ]);

        DB::table('variants')->insert([
            'id'            => 6,
            'title'  => 'Ні',
            'question_id'   => 2,
        ]);

        DB::table('questions')->insert([
            'id'                    => 2,
            'title'         => 'Чи є різниця між одинарними та подвійними лапками у PHP?',
            'correct_variant_id'    => 5,
            'quiz_id'               => 1,
        ]);


        DB::table('variants')->insert([
            'id'            => 7,
            'title'  => 'Змінна що бере назву змінної та розглядає її як своє значення',
            'question_id'   => 3,
        ]);

        DB::table('variants')->insert([
            'id'            => 8,
            'title'  => 'Змінна що динамічно генерується випадковим чином',
            'question_id'   => 3,
        ]);

        DB::table('variants')->insert([
            'id'            => 9,
            'title'  => 'Змінна що бере значення змінної та розглядає його як ім\'я змінної',
            'question_id'   => 3,
        ]);

        DB::table('questions')->insert([
            'id'                    => 3,
            'title'         => 'Динамічна змінна це:',
            'correct_variant_id'    => 9,
            'quiz_id'               => 1,
        ]);


        DB::table('variants')->insert([
            'id'            => 10,
            'title'  => 'Модель вирішення завдань, що не повторюються',
            'question_id'   => 4,
        ]);

        DB::table('variants')->insert([
            'id'            => 11,
            'title'  => 'Модель вирішення завдань, що багаторазово повторюється',
            'question_id'   => 4,
        ]);

        DB::table('variants')->insert([
            'id'            => 12,
            'title'  => 'Модель вирішення завдань, що не можуть бути вирішені звичайними методами проектування',
            'question_id'   => 4,
        ]);

        DB::table('questions')->insert([
            'id'                    => 4,
            'title'         => 'Що таке шаблони (патерни) проектування?',
            'correct_variant_id'    => 11,
            'quiz_id'               => 1,
        ]);


        DB::table('variants')->insert([
            'id'            => 13,
            'title'  => 'Функціональна та процедурна',
            'question_id'   => 5,
        ]);

        DB::table('variants')->insert([
            'id'            => 14,
            'title'  => 'Аспектно-орієнтована',
            'question_id'   => 5,
        ]);

        DB::table('variants')->insert([
            'id'            => 15,
            'title'  => 'Усі варіанти вірні',
            'question_id'   => 5,
        ]);

        DB::table('questions')->insert([
            'id'                    => 5,
            'title'         => 'Які ще є парадигми (моделі, підходи) програмування, крім ООП?',
            'correct_variant_id'    => 15,
            'quiz_id'               => 1,
        ]);


        DB::table('variants')->insert([
            'id'            => 16,
            'title'  => 'setTimeout( function(){ alert(\'Hello\'); }, 3000 );',
            'question_id'   => 6,
        ]);

        DB::table('variants')->insert([
            'id'            => 17,
            'title'  => 'sleep( 3000, function(){ alert(\'Hello\'); } );',
            'question_id'   => 6,
        ]);

        DB::table('variants')->insert([
            'id'            => 18,
            'title'  => 'setTimeout( 3000, function(){ alert(\'Hello\'); } );',
            'question_id'   => 6,
        ]);

        DB::table('questions')->insert([
            'id'                    => 6,
            'title'         => 'Потрібно за допомогою alert() вивести якесь повідомлення через 3 секунди після запуску скрипта. Як це зробити?',
            'correct_variant_id'    => 16,
            'quiz_id'               => 1,
        ]);


        DB::table('variants')->insert([
            'id'            => 19,
            'title'  => '#my – селектор класу, а .my – селектор ID.',
            'question_id'   => 7,
        ]);

        DB::table('variants')->insert([
            'id'            => 20,
            'title'  => '#my – селектор ID, а .my – селектор класу.',
            'question_id'   => 7,
        ]);

        DB::table('variants')->insert([
            'id'            => 21,
            'title'  => 'Немає вірної відповіді',
            'question_id'   => 7,
        ]);

        DB::table('questions')->insert([
            'id'                    => 7,
            'title'         => 'У чому різниця між записом #my та .my?',
            'correct_variant_id'    => 20,
            'quiz_id'               => 1,
        ]);

    }
}
