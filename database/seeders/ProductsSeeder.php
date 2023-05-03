<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
			[
				'name' => 'Philco PLDS 106 DG elöltöltős keskeny mosógép',
                'price' => 93990,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 1
			],
            [
				'name' => 'Bosch WAN24265BY Elöltöltős mosógép',
                'price' => 159990,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 1
            ],
            [
				'name' => 'Candy CSE C10DG-S Szárítógép',
                'price' => 109990,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 1
            ],
            [
				'name' => 'Heinner HCD-V802B Kondenzációs szárítógép',
                'price' => 100990,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 1
            ],
            [
				'name' => 'Heinner HF-V213SF+ Kétajtós hűtőszekrény',
                'price' => 86990,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 1
            ],
            [
				'name' => 'STARCREST SF-210WH két ajtós hűtőszekrény',
                'price' => 89000,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 1
            ],
            [
				'name' => 'Star-Light 22SLTA1000H LED Televízió',
                'price' => 89000,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 2
            ],
            [
				'name' => 'Samsung Smart TV',
                'price' => 129990,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 2
            ],
            [
				'name' => 'A+ SPB223 Fali TV konzol',
                'price' => 6990,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 2
            ],
            [
				'name' => 'TV HANDLE MarkAdler',
                'price' => 7790,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 2
            ],
            [
				'name' => '2 db MAGNAT padlóhangszóró készlet',
                'price' => 161650,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 2
            ],
            [
				'name' => 'Sonos Sub multiroom mélynyomó',
                'price' => 336778,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 2
            ],
            [
				'name' => 'Xiaomi Redmi Note 11 Mobiltelefon',
                'price' => 82790,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 3
            ],
            [
				'name' => 'Honor Magic5 Pro Mobiltelefon',
                'price' => 529989,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 3
            ],
            [
				'name' => 'ASUS VivoBook 15 M1502IA Laptop',
                'price' => 189990,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 3
            ],
            [
				'name' => 'Lenovo IdeaPad 5 Pro14ACN6',
                'price' => 253090,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 3
            ],
            [
				'name' => 'Samsung Galaxy Tab A7 Lite T220 tablet',
                'price' => 53290,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 3
            ],
            [
				'name' => 'Lenovo Tab M8',
                'price' => 61990,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 3
            ],
            [
				'name' => 'GeFors Office 2 - i7 Asztali számítógép',
                'price' => 133900,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 4
            ],
            [
				'name' => 'Spacer asztali számítógép',
                'price' => 41750,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 4
            ],
            [
				'name' => 'XFX Radeon RX 570 RS Black Edition videókártya',
                'price' => 66990,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 4
            ],
            [
				'name' => 'Asus ROG Strix Radeon RX 560 Gaming videókártya',
                'price' => 69646,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 4
            ],
            [
				'name' => 'Logitech G213 Prodigy RGB Gaming billentyűzet',
                'price' => 18990,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 4
            ],
            [
				'name' => 'Redragon Draconic mechanikus játékbillentyűzet',
                'price' => 23324,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 4
            ],
            [
				'name' => 'Nikon COOLPIX P1000 digitális fényképezőgép',
                'price' => 449990,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 5
            ],
            [
				'name' => 'EasyPix W3048 Edge víz alatti kamera',
                'price' => 60818,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 5
            ],
            [
				'name' => 'Canon EF-S 18-135mm f/3.5-5.6 IS USM Nano objektív',
                'price' => 216890,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 5
            ],
            [
				'name' => 'Dörr Danubia 8,0/500 tükörobjektív',
                'price' => 57090,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 5
            ],
            [
				'name' => 'Sencor SDF 782 BK 7" Digitális fotókeret',
                'price' => 25990,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 5
            ],
            [
				'name' => 'IMA Trend digitális képkeret',
                'price' => 45206,
                'image' => 'asd',
                'quantity' => 2,
				'category_id' => 5
                ]
        ]);
    }
}
