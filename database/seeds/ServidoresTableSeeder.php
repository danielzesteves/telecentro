<?php

use Illuminate\Database\Seeder;

class ServidoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Servidor::class, 50)->create();
    }
}
