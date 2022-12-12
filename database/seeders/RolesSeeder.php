<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

/**
 * @class RolesSeeder
 * @brief información por defecto de roles
 *
 * Gestiona la información por defecto a registrar inicialmente para los roles
 *
 * @author  Paúl Rojas <paulrojasdev@gmail.com>
 * @license <a href='​http://www.gnu.org/licenses/gpl-2.0.html'>GNU Public License versión 2 (GPLv2)</a>
 * @link    http://localhost
 */
class RolesSeeder extends Seeder
{
    /**
     * Método que registra los valores iniciales de los roles
     *
     * @author Paúl Rojas <paulrojasdev@gmail.com>
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // @var array Listado de roles a registrar
        $roles = [
            [
                'name' => 'admin'
            ],
            [
                'name' => 'entrepreneur'
            ],
            [
                'name' => 'investor'
            ],
            [
                'name' => 'professional'
            ]
        ];

        DB::transaction(
            function () use ($roles) {
                foreach ($roles as $role) {
                    Role::updateOrCreate(
                        ['name' => $role['name']]
                    );
                }
            }
        );
    }
}
