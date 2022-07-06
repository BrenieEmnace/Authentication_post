<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            'name' => 'Brenie Emnace',
            'email' => 'brenieemnace@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('12345678')
        ],
        [
            'name' => 'Emnace Brenie',
            'email' => 'emnacebrenie@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('12345678')
        ],
        [
            'name' => 'Bren Ems',
            'email' => 'brenems@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('12345678')
        ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
