<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(User $user)
    {
        $user->create([
            'name' => 'Carlos',
            'email' => 'carlos@email.com',
            'password' => Hash::make(Str::random(8))
        ]);
        $user->create([
            'name' => 'Lais',
            'email' => 'lais@email.com',
            'password' => Hash::make(Str::random(8))
        ]);
        $user->create([
            'name' => 'Bruce',
            'email' => 'bruce@email.com',
            'password' => Hash::make(Str::random(8))
        ]);
        $user->create([
            'name' => 'Maggie',
            'email' => 'maggie@email.com',
            'password' => Hash::make(Str::random(8))
        ]);
        $user->create([
            'name' => 'Bob',
            'email' => 'bob@email.com',
            'password' => Hash::make(Str::random(8))
        ]);
    }
}
