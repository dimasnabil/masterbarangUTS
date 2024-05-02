<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use Faker\Factory;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'A-110',
            'name' => 'T-Shirt Band Morfem L',
            'price' => 185000,
            'desc' => $faker->text(200),
            'stock' => 5
        ]);

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'A-111',
            'name' => 'T-Shirt Band Morfem M',
            'price' => 185000,
            'desc' => $faker->text(200),
            'stock' => 4
        ]);

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'B-210',
            'name' => 'T-Shirt Band GodBless L',
            'price' => 170000,
            'desc' => $faker->text(200),
            'stock' => 2
        ]);

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'C-310',
            'name' => 'T-Shirt Band Avenged Sevenfold M',
            'price' => 350000,
            'desc' => $faker->text(200),
            'stock' => 2
        ]);

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'D-410',
            'name' => 'T-Shirt Band Hindia M',
            'price' => 190000,
            'desc' => $faker->text(200),
            'stock' => 4
        ]);
    }
}
