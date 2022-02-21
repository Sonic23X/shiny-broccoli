<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'sistema1']);
        Role::create(['name' => 'sistema2']);
        Role::create(['name' => 'sistema3']);
        Role::create(['name' => 'admin']);
    }
}
