<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permisos disponibles para la gestión del colegio
        $permissions = [
            [
                'name' => 'users.list'
            ],
            [
                'name' => 'users.create'
            ],
            [
                'name' => 'users.show'
            ],
            [
                'name' => 'users.edit'
            ],
            [
                'name' => 'users.delete'
            ],
        ];

        DB::transaction(
            function () use ($permissions) {
                // @var object Crea el usuario ADMIN por defecto de la aplicación *
                $userAdmin = User::updateOrCreate(
                    ['email' => 'admin@email.com'],
                    [
                        'name' => 'Admin',
                        'email_verified_at' => now(),
                        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                        'remember_token' => Str::random(10),
                        'created_at' => Carbon::now()
                    ]
                );

                if (!$userAdmin) {
                    throw new Exception(
                        'Error creando el usuario administrador por defecto'
                    );
                }

                // @var object Busca el rol de administrador del sistema
                $adminRole = Role::where('name', 'admin')->first();
                // Asigna el rol de administrador
                if ($adminRole) {
                    $userAdmin->assignRole($adminRole);
                }

                foreach ($permissions as $permission) {
                    $per = Permission::updateOrCreate(
                        ['name' => $permission['name']],
                    );
                    $adminRole->givePermissionTo($per);
                }
            }
        );
    }
}
