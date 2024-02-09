<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MySeedersRegistr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MyModelsTableSeeder::class);
        $this->call(MyModel2Seeder::class);
        $this->call(MyModel3Seeder::class);
    }
}
