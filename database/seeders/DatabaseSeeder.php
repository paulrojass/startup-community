<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seeder para los roles disponibles
        $this->call(RolesSeeder::class);
        //Seeder para los permisos disponibles
        $this->call(PermissionsSeeder::class);
        $this->call(UserSeeder::class);
        // Crear perfiles de usuarios
        $this->call(ProfileSeeder::class);
        \App\Models\User::factory(50)->create();
        //\App\Models\Startup::factory(50)->create();
    }
}
