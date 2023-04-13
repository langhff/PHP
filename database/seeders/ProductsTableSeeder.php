<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'category_id' => 3,
                'code' => 'candy-bear-5-pack',
                'name' => 'Candy Bear 5 Pack',
                'price' => '19.99',
                'description' => '',
                'image' => 'products/qLS3PYSpmP6QjBccOCDaxl0jjeeSpC2xBxT5rFWL.bin',
                'new' => '0',
                'sale' => '0',
                'old_price' => '0',
            ],
            [
                'category_id' => 17,
                'code' => 'coca-cola-5-pack',
                'name' => 'Coca-Cola 5 Pack',
                'price' => '19.99',
                'description' => '',
                'image' => 'products/A79DQdOKXe5BKjt8XvN7iDKkPxMlVPEIlkL7MTdP.bin',
                'new' => '0',
                'sale' => '0',
                'old_price' => '0',
            ],
            [
                'category_id' => 2,
                'code' => 'i-heart',
                'name' => 'I Heart',
                'price' => '4.99',
                'description' => '',
                'image' => 'products/p6QhxsutwsYLHM6p0u0hbzGRLN0xAvP1bgRrF2Aj.bin',
                'new' => '0',
                'sale' => '0',
                'old_price' => '0',
            ],
            [
                'category_id' => 4,
                'code' => 'llama',
                'name' => 'Llama',
                'price' => '4.99',
                'description' => 'Show off your love for these cute and friendly pack animals with the colorful Llama Jibbitz™ charm. Also great if you love the beautiful countries of South America!',
                'image' => 'products/ugpPqx5Y5Fx6oyH8QzFSbZEedQjCqqupt7Ilm7Zj.bin',
                'new' => '1',
                'sale' => '0',
                'old_price' => '5.99',
            ],
            [
                'category_id' => 2,
                'code' => 'minecraft-5-pack',
                'name' => 'MINECRAFT 5 PACK',
                'price' => '19.99',
                'description' => '',
                'image' => 'products/5LUUjHT8ciz0s4xRzUmWRDhGZPSyxY2dLJ2YlH1E.bin',
                'new' => '1',
                'sale' => '0',
                'old_price' => '0',
            ],
            [
                'category_id' => 2,
                'code' => 'patrick',
                'name' => 'Patrick',
                'price' => '4.99',
                'description' => '',
                'image' => 'products/Ssc8wP61d5EmXMO4KveYhAU2vy8YYtendoUZKA1E.bin',
                'new' => '0',
                'sale' => '1',
                'old_price' => '6.99',
            ],
            [
                'category_id' => 4,
                'code' => 'paw-print',
                'name' => 'Paw Print',
                'price' => '4.99',
                'description' => 'Furry friends are the best! This simple black-and-white Paw Print Jibbitz™ charm is great for animal lovers of all kinds.',
                'image' => 'products/3CwfEbSyAZ5VtOGLG4sHaE2jeAFnUw523Kx3Yc06.bin',
                'new' => '1',
                'sale' => '1',
                'old_price' => '6.99',
            ],
            [
                'category_id' => 4,
                'code' => 'pink-rubber-ducky',
                'name' => 'Pink Rubber Ducky',
                'price' => '2.99',
                'description' => '',
                'image' => 'products/HvZIwlhymK0FuGXHZz6PYKM022yNhV4ofjl8GKcG.bin',
                'new' => '0',
                'sale' => '0',
                'old_price' => '3   .99',
            ],
            [
                'category_id' => 3,
                'code' => 'pizza-slice',
                'name' => 'Pizza Slice',
                'price' => '4.99',
                'description' => "You want a pizza this? Grab a slice of 'za with the Pizza Slice Jibbitz™ charm to take your favorite meal with you no matter where you go.",
                'image' => 'products/k7hJQa52Y8XrOGva7zrMhnnTjlFaReNjtlzdRGuR.bin',
                'new' => '0',
                'sale' => '1',
                'old_price' => '6.99',
            ],
            [
                'category_id' => 2,
                'code' => 'super-mario-5-pack',
                'name' => 'Super Mario 5 Pack',
                'price' => '19.99',
                'description' => 'Take the Mushroom Kingdom by storm with this lovable set of Jibbitz charms from Crocs! Includes the Super Mario, Luigi, Princess Peach, Bowser and Yoshi Jibbitz charms. TM & © 2020 Nintendo. All Rights Reserved.',
                'image' => 'products/ibrsnrWhZ2KvILnfHwo9QJemUUYN8qOFMI8iAqsY.bin',
                'new' => '0',
                'sale' => '0',
                'old_price' => '0',
            ],
            [
                'category_id' => 3,
                'code' => 'taco-tuesday-5-pack',
                'name' => 'Taco Tuesday 5 Pack',
                'price' => '19.99',
                'description' => '',
                'image' => 'products/wAKzEopKJMjmcSa7KKzOK8tIYtuKtOTell8ARAf0.bin',
                'new' => '0',
                'sale' => '0',
                'old_price' => '0',
            ],
            [
                'category_id' => 4,
                'code' => 'under-the-sea-3-pack',
                'name' => 'Under The Sea 3 Pack',
                'price' => '19.99',
                'description' => '',
                'image' => 'products/CBsntmuG7jwYD8LKKLtGoMFjoM9CoHN824Td2tfw.bin',
                'new' => '1',
                'sale' => '0',
                'old_price' => '0',
            ],
            [
                'category_id' => 2,
                'code' => 'young-girl-cartoons-5-pack',
                'name' => 'Young Girl Cartoons 5 Pack',
                'price' => '19.99',
                'description' => '',
                'image' => 'products/7CUrUfIfXpowdRKCUrRKq7wkQ5owRg4XwnbWKFnG.bin',
                'new' => '1',
                'sale' => '0',
                'old_price' => '0',
            ],
        ]);
    }
}
