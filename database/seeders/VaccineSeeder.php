<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use App\Models\Vaccine;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
            ->create();
    }
}
