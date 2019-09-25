<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Patient::class,50)->create()->each(function (App\Patient $patient){
            factory(App\Treatment::class)->make()
                ->patient()->associate($patient)
                ->save();
        });
    }
}
