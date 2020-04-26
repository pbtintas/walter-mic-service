<?php

use Illuminate\Database\Seeder;

class GenrerTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Genre::class, 10)->create();
    }
}
