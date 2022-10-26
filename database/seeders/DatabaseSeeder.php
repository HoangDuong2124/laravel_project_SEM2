<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Hoàng Dương ',
                'phonenumber' => '09123456789',
                'email' => 'abc@gmail.com',
                'password' => Hash::make('123456789'),
                
            ],
            [
                'id' => 2,
                'name' => 'Hảo Nhi ',
                'phonenumber' => '09123498765',
                'email' => '1234@gmail.com',
                'password' => Hash::make('111111111'),
            ],
        ]);
    }
}
