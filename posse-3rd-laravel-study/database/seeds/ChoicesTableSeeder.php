<?php

use Illuminate\Database\Seeder;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choices')->truncate();
        $param = [
            'question_id' => 1,
            'name' => 'たかなわ',
            'valid' => true
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 1,
            'name' => 'たかわ',
            'valid' => false
        ];

        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 1,
            'name' => 'こうわ',
            'valid' => false
        ];

        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 2,
            'name' => 'かめいど',
            'valid' => true
        ];

        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 2,
            'name' => 'かめど',
            'valid' => false
        ];

        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 2,
            'name' => 'かめと',
            'valid' => false
        ];

        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 3,
            'name' => 'むかいなだ',
            'valid' => true
        ];

        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 3,
            'name' => 'むきひら',
            'valid' => false
        ];

        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 3,
            'name' => 'むこうひら',
            'valid' => false
        ];

        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 4,
            'name' => 'むかいなだ',
            'valid' => true
        ];

        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 4,
            'name' => 'むきひら',
            'valid' => false
        ];

        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 4,
            'name' => 'むこうひら',
            'valid' => false
        ];

        
        DB::table('choices')->insert($param);
    }
}
