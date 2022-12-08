<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * @class PermissionsSeeder
 * @brief información por defecto de permisos
 *
 * Gestiona la información por defecto a registrar inicialmente para los permisos
 *
 * @author  William Páez <paez.william8@gmail.com>
 * @license <a href='​http://www.gnu.org/licenses/gpl-2.0.html'>GNU Public License versión 2 (GPLv2)</a>
 */
class PermissionsSeeder extends Seeder
{
    /**
     * Método que registra los valores iniciales de los permisos
     *
     * @author William Páez <paez.william8@gmail.com>
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $adminRole = Role::where('name', 'admin')->first();
        $teacherRole = Role::where('name', 'teacher')->first();
        $operatorRole = Role::where('name', 'operator')->first();
        $familyRole = Role::where('name', 'family')->first();
        $studentRole = Role::where('name', 'student')->first();

        //Permisos disponibles para la gestión de registros comúnes

        $permissions = [
            // Panel administrativo
            [
                'name' => 'settings.list'
            ],
        ];

        DB::transaction(
            function () use ($permissions, $adminRole, $operatorRole, $teacherRole, $familyRole, $studentRole) {
                foreach ($permissions as $permission) {
                    $per = Permission::updateOrCreate(
                        ['name' => $permission['name']],
                    );
                    
                    if ($adminRole) {
                        $adminRole->givePermissionTo($per);
                        // $operatorRole->givePermissionTo($per);
                        // $teacherRole->givePermissionTo($per);
                        // $familyRole->givePermissionTo($per);
                        // $studentRole->givePermissionTo($per);
                    }
                }
            }
        );
    }
}
