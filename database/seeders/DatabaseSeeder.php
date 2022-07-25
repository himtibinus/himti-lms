<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        DB::table('roles')->insert([
            'id' => 1,
            'name' => "aktivis",
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'name' => "manager",
        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'name' => "pengurus",
        ]);
        \App\Models\UserDetail::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => 'blablabla',
        //     'studentid' => ''
        // ]);
    }
}
