<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Startup;
use App\Models\User;

class StartupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'admin@email.com')->first();
        
        DB::transaction(
            function () use ($user) {

                $startups = [
                    'Escuela de escuelas',
                    'Construcción',
                    'The Bio Market',
                    '946',
                    'Corporat-e',
                    'Myeart',
                    'GolfPeople',
                    'Ingenery Saving',
                    'Kiota Inteligencia Artificial',
                    'Goomi',
                    'Proyecto Musical',
                    'Cervezas Marbella',
                    'IDResources',
                    'Cevra',
                    'V3Sing',
                    'LessBlocking',
                    'Byoorg',
                    'EuropeGolfShop',
                    'ClimateMarbella',
                    'OHM Vaper',
                ];

                foreach ($startups as $key => $startup) {
                    Startup::updateOrcreate(
                        [
                            'name' => $startup],
                        [
                            'user_id' => $user->id,
                        ]
                    );
                }
            }
        );
    }
}
