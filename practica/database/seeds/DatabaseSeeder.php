<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(\App\empresa::class,10)->create();
        factory(\App\tut_lab::class,20)->create();
        factory(\App\tut_doc::class,20)->create();
        factory(\App\ciclo::class,20)->create();
        factory(\App\fecha::class,20)->create();
        factory(\App\alumno::class,20)->create();
    

    }
}
