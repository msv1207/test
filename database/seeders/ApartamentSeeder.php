<?php

namespace Database\Seeders;

use App\Models\Apartament;
use Illuminate\Database\Seeder;

class ApartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apartament::create([
            'name' => 'The Victoria',
            'price' => '374662',
            'bedrooms'=>'4',
            'bathrooms'=>'2',
            'storeys'=>'2',
            'garages'=>'2',
        ]);
        Apartament::create([
            'name' => 'The Xavier',
            'price' => '513268',
            'bedrooms'=>'4',
            'bathrooms'=>'2',
            'storeys'=>'1',
            'garages'=>'2',
        ]);
        Apartament::create([
            'name' => 'The Como',
            'price' => '454990',
            'bedrooms'=>'4',
            'bathrooms'=>'3',
            'storeys'=>'2',
            'garages'=>'3',
        ]);
        Apartament::create([
            'name' => 'The Aspen',
            'price' => '384356',
            'bedrooms'=>'4',
            'bathrooms'=>'2',
            'storeys'=>'2',
            'garages'=>'2',
        ]);
        Apartament::create([
            'name' => 'The Lucretia',
            'price' => '572002',
            'bedrooms'=>'4',
            'bathrooms'=>'3',
            'storeys'=>'2',
            'garages'=>'2',
        ]);
        Apartament::create([
            'name' => 'The Toorak',
            'price' => '521951',
            'bedrooms'=>'5',
            'bathrooms'=>'2',
            'storeys'=>'1',
            'garages'=>'2',
        ]);
        Apartament::create([
            'name' => 'The Skyscape',
            'price' => '263604',
            'bedrooms'=>'3',
            'bathrooms'=>'2',
            'storeys'=>'2',
            'garages'=>'2',
        ]);
        Apartament::create([
            'name' => 'The Clifton',
            'price' => '386103',
            'bedrooms'=>'3',
            'bathrooms'=>'2',
            'storeys'=>'1',
            'garages'=>'1',
        ]);
        Apartament::create([
            'name' => 'The Geneva',
            'price' => '390600',
            'bedrooms'=>'4',
            'bathrooms'=>'3',
            'storeys'=>'2',
            'garages'=>'2',
        ]);
    }
}
