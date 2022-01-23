<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->truncate();
        $param =[
                'area_id' => 1,
                'name' => 'たかなわ',
                'question_number' => 1,
                'img'=> '1-1.png',
                'commentary' => '正解は「たかなわ」です',
            ];
    DB::table('questions')->insert($param);
    $param =[
        'area_id' => 1,
        'name' => 'かめいど',
        'question_number' => 2,
        'img'=> '1-2.png',
        'commentary' => '正解は「かめいど」です',
    ];
DB::table('questions')->insert($param);
    $param =[
                'area_id' => 2,
                'name' => 'むかいなだ',
                'question_number' => 1,
                'img'=> '2-1.png',
                'commentary' => '正解は「むかいなだ」です',
            ];
    DB::table('questions')->insert($param);
    $param =[
        'area_id' => 2,
        'name' => 'みつぎ',
        'question_number' => 2,
        'img'=> '2-2.png',
        'commentary' => '正解は「みつぎ」です',
    ];
DB::table('questions')->insert($param);


    }
}
