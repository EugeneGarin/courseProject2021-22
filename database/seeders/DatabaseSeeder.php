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
        DB::table('questions')->delete();
        DB::table('variants')->delete();

        DB::table('variants')->insert([
            'id'            => 1,
            'variant_text'  => '5',
            'question_id'   => 1,
        ]);

        DB::table('variants')->insert([
            'id'            => 2,
            'variant_text'  => '8',
            'question_id'   => 1,
        ]);

        DB::table('variants')->insert([
            'id'            => 3,
            'variant_text'  => '10',
            'question_id'   => 1,
        ]);

        DB::table('variants')->insert([
            'id'            => 4,
            'variant_text'  => '12',
            'question_id'   => 1,
        ]);

        DB::table('questions')->insert([
            'id'                    => 1,
            'question_text'         => 'Скільки типів даних у РНР?',
            'correct_variant_id'    => 3,
        ]);


        DB::table('variants')->insert([
            'id'            => 5,
            'variant_text'  => 'Так',
            'question_id'   => 2,
        ]);

        DB::table('variants')->insert([
            'id'            => 6,
            'variant_text'  => 'Ні',
            'question_id'   => 2,
        ]);

        DB::table('questions')->insert([
            'id'                    => 2,
            'question_text'         => 'Чи є різниця між одинарними та подвійними лапками у PHP?',
            'correct_variant_id'    => 5,
        ]);


        DB::table('variants')->insert([
            'id'            => 7,
            'variant_text'  => 'Змінна що бере назву змінної та розглядає її як своє значення',
            'question_id'   => 3,
        ]);

        DB::table('variants')->insert([
            'id'            => 8,
            'variant_text'  => 'Змінна що динамічно генерується випадковим чином',
            'question_id'   => 3,
        ]);

        DB::table('variants')->insert([
            'id'            => 9,
            'variant_text'  => 'Змінна що бере значення змінної та розглядає його як ім\'я змінної',
            'question_id'   => 3,
        ]);

        DB::table('questions')->insert([
            'id'                    => 3,
            'question_text'         => 'Динамічна змінна це:',
            'correct_variant_id'    => 9,
        ]);


        DB::table('variants')->insert([
            'id'            => 10,
            'variant_text'  => 'Модель вирішення завдань, що не повторюються',
            'question_id'   => 4,
        ]);

        DB::table('variants')->insert([
            'id'            => 11,
            'variant_text'  => 'Модель вирішення завдань, що багаторазово повторюється',
            'question_id'   => 4,
        ]);

        DB::table('variants')->insert([
            'id'            => 12,
            'variant_text'  => 'Модель вирішення завдань, що не можуть бути вирішені звичайними методами проектування',
            'question_id'   => 4,
        ]);

        DB::table('questions')->insert([
            'id'                    => 4,
            'question_text'         => 'Що таке шаблони (патерни) проектування?',
            'correct_variant_id'    => 11,
        ]);


        DB::table('variants')->insert([
            'id'            => 13,
            'variant_text'  => 'Функціональна та процедурна',
            'question_id'   => 5,
        ]);

        DB::table('variants')->insert([
            'id'            => 14,
            'variant_text'  => 'Аспектно-орієнтована',
            'question_id'   => 5,
        ]);

        DB::table('variants')->insert([
            'id'            => 15,
            'variant_text'  => 'Усі варіанти вірні',
            'question_id'   => 5,
        ]);

        DB::table('questions')->insert([
            'id'                    => 5,
            'question_text'         => 'Які ще є парадигми (моделі, підходи) програмування, крім ООП?',
            'correct_variant_id'    => 15,
        ]);


        DB::table('variants')->insert([
            'id'            => 16,
            'variant_text'  => 'setTimeout( function(){ alert(\'Hello\'); }, 3000 );',
            'question_id'   => 6,
        ]);

        DB::table('variants')->insert([
            'id'            => 17,
            'variant_text'  => 'sleep( 3000, function(){ alert(\'Hello\'); } );',
            'question_id'   => 6,
        ]);

        DB::table('variants')->insert([
            'id'            => 18,
            'variant_text'  => 'setTimeout( 3000, function(){ alert(\'Hello\'); } );',
            'question_id'   => 6,
        ]);

        DB::table('questions')->insert([
            'id'                    => 6,
            'question_text'         => 'Потрібно за допомогою alert() вивести якесь повідомлення через 3 секунди після запуску скрипта. Як це зробити?',
            'correct_variant_id'    => 16,
        ]);


        DB::table('variants')->insert([
            'id'            => 19,
            'variant_text'  => '#my – селектор класу, а .my – селектор ID.',
            'question_id'   => 7,
        ]);

        DB::table('variants')->insert([
            'id'            => 20,
            'variant_text'  => '#my – селектор ID, а .my – селектор класу.',
            'question_id'   => 7,
        ]);

        DB::table('variants')->insert([
            'id'            => 21,
            'variant_text'  => 'Немає вірної відповіді',
            'question_id'   => 7,
        ]);

        DB::table('questions')->insert([
            'id'                    => 7,
            'question_text'         => 'У чому різниця між записом #my та .my?',
            'correct_variant_id'    => 20,
        ]);

    }
}
