<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{

    
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call([RoleSeeder::class ,  UserSeeder::class]);
        $this->call([UserSeeder::class, RoleSeeder::class ]);
        //$this->call(RoleSeeder::class );
        //$this->call(UserSeeder::class );
        //$this->call(PermissionSeeder::class);
         
    }
}



