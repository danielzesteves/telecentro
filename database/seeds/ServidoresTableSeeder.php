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
        factory(App\Servidor::class, 10)->create();
        factory(App\User::class, 3)->create();
    }
}
