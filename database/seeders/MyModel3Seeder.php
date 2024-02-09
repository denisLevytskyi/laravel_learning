<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyModel3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            0 => ['role_name' => 'user'],
            1 => ['role_name' => 'admin']
        ];


        DB::table('my_model3s')->insert($list);

    }
}
