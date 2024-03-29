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
                'name' => 'andre' . $i
            ];

            $data[] = $list;
        }
        DB::table('my_models')->insert($data);
    }
}
