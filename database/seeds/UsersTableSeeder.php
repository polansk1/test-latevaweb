<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!empty(env('LOCAL_USER_USERNAME')) && !empty(env('LOCAL_USER_PASSWORD'))) {
            $localUser = App\User::create([
                'name' => env('LOCAL_USER_NAME', 'Local000'),
                'email' => env('LOCAL_USER_EMAIL', 'local@test.com'),
                'password' => Hash::make(env('LOCAL_USER_PASSWORD')),
            ]);
            $localUser->save();
        }

        $localUser = App\User::create([
            'name' => 'User000',
            'email' => 'user@test.com',
            'password' => Hash::make('secret123'),
        ]);
        $localUser->save();
    }
}
