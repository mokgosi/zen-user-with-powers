<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use App\Models\VaccineType;
use App\Models\Vaccine;

class VaccineTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VaccineType::factory()
            ->count(3)
            ->state(new Sequence(
                [
                    'name' => 'Inactivated vaccines', 
                    'description' => 'Inactivated vaccines use the killed version of the germ that causes a disease.'
                ],[
                    'name' => 'Live-attenuated vaccines',
                    'description' => 'Live vaccines use a weakened (or attenuated) form of the germ that causes a disease.'
                ],
                [
                    'name' => 'Messenger RNA (mRNA) vaccines',
                    'description' => 'mRNA vaccines make proteins in order to trigger an immune response.'
                ],
            ))
            ->has(
                Vaccine::factory()
                ->count(3)
                ->state(new Sequence(
                    [
                        'name' => 'Hepatitis A', 
                        'description' => ''
                    ],[
                        'name' => 'Flu (shot only)',
                        'description' => ''
                    ],
                    [
                        'name' => 'Polio (shot only)',
                        'description' => ''
                    ],
                ))
            )
            ->create();
    }
}