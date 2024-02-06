<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        for ($i = 1; $i<100; $i++) {
            $list = [
                'myText' => '1',
                'MyTime' => time(),
                'MyInt' => $i . rand(0, 50000)
            ];

            $data[] = $list;
        }
        DB::table('my_models')->insert($data);
    }
}
