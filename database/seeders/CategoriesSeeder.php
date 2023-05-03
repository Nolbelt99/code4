<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
			[
				'name' => 'Háztartási gépek'
			],
            [
				'name' => 'TV és szórakozás'
			],
            [
				'name' => 'Telefon, Tablet, Laptop'
			],
            [
				'name' => 'Számítástechnika'
			],
            [
				'name' => 'Fotó-Videó, Okos eszközök'
			]
        ]);
    }
}
