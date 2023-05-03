<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class SubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::insert([
			[
				'name' => 'Mosógépek',
				'category_id' => 1
			],
            [
				'name' => 'Szárítógépek',
				'category_id' => 1
			],
            [
				'name' => 'Hűtőszekrények',
				'category_id' => 1
			],
            [
				'name' => 'Televíziók',
				'category_id' => 2
			],
            [
				'name' => 'TV tartozékok',
				'category_id' => 2
			],
            [
				'name' => 'Házimozi és audió rendszerek',
				'category_id' => 2
			],
            [
				'name' => 'Telefonok és tartozékok',
				'category_id' => 3
			],
            [
				'name' => 'Laptopok',
				'category_id' => 3
			],
            [
				'name' => 'Tabletek és tartozékok',
				'category_id' => 3
			],
            [
				'name' => 'Asztali számítógépek',
				'category_id' => 4
			],
            [
				'name' => 'PC alkatrészek',
				'category_id' => 4
			],
            [
				'name' => 'Perifériák',
				'category_id' => 4
			],
            [
				'name' => 'Fényképezőgépek',
				'category_id' => 5
			],
            [
				'name' => 'Fényképezőgép tartozékok',
				'category_id' => 5
			],
            [
				'name' => 'Digitális képkeretek',
				'category_id' => 5
			]
        ]);
    }
}
