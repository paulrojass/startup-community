<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Profile;
use App\Models\User;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::transaction(
            function () {
                // Obtener la lista de todos los usuarios
                $users = User::role(
                    [
                        'admin',
                        'entrepreneur',
                        'investor',
                        'professional'
                    ]
                )->get();

                foreach ($users as $key => $user) {
                    Profile::updateOrCreate(
                        [
                            'user_id' => $user->id,
                            'first_name' => fake()->firstName(),
                            'last_name' => fake()->lastName(),
                            'birthdate' => Carbon::now()->subYears(rand(20, 55)),
                            'address' => fake()->address(),
                            'phone' => fake()->e164PhoneNumber(),
                            'avatar' => 'images/avatars/default.jpg',
                        ]
                    );
                }
            }
        );
    }
}
