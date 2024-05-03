<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'LG Mobile',
                'price' => '10000',
                'description' => 'new phone',
                'category' => 'mobile',
                'gallery' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Samsung Galaxy S20',
                'price' => '12000',
                'description' => 'Flagship smartphone with advanced camera features',
                'category' => 'mobile',
                'gallery' => 'https://cdn.pixabay.com/photo/2016/03/27/17/45/phone-1287313__480.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'iPhone 12 Pro',
                'price' => '13000',
                'description' => 'Latest model from Apple with powerful performance',
                'category' => 'mobile',
                'gallery' => 'https://cdn.pixabay.com/photo/2015/10/01/21/39/apple-967820__480.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Google Pixel 5',
                'price' => '9000',
                'description' => 'Google\'s flagship phone with exceptional camera quality',
                'category' => 'mobile',
                'gallery' => 'https://cdn.pixabay.com/photo/2016/11/21/12/39/smartphone-1845350__480.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'OnePlus 8T',
                'price' => '10000',
                'description' => 'High-performance smartphone with fast charging',
                'category' => 'mobile',
                'gallery' => 'https://cdn.pixabay.com/photo/2018/04/26/14/10/smartphone-3350721__480.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Xiaomi Mi 11',
                'price' => '11000',
                'description' => 'Feature-rich smartphone with sleek design',
                'category' => 'mobile',
                'gallery' => 'https://cdn.pixabay.com/photo/2016/06/29/06/38/smartphone-1488799__480.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Huawei P40 Pro',
                'price' => '10500',
                'description' => 'Huawei\'s flagship device with impressive camera capabilities',
                'category' => 'mobile',
                'gallery' => 'https://cdn.pixabay.com/photo/2016/10/20/18/35/smartphone-1751713__480.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Sony Xperia 1 II',
                'price' => '11500',
                'description' => 'Premium smartphone with top-notch display and audio quality',
                'category' => 'mobile',
                'gallery' => 'https://cdn.pixabay.com/photo/2015/01/29/20/45/smartphone-616001__480.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Motorola Edge+',
                'price' => '9500',
                'description' => 'Motorola\'s flagship phone with curved display and long battery life',
                'category' => 'mobile',
                'gallery' => 'https://cdn.pixabay.com/photo/2017/03/27/14/47/technology-2178710__480.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Oppo Find X2 Pro',
                'price' => '10800',
                'description' => 'Sleek and powerful smartphone with advanced camera system',
                'category' => 'mobile',
                'gallery' => 'https://cdn.pixabay.com/photo/2016/09/30/11/35/smartphone-1701792__480.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Nokia 8.3',
                'price' => '9700',
                'description' => 'Nokia\'s 5G smartphone with pure Android experience',
                'category' => 'mobile',
                'gallery' => 'https://cdn.pixabay.com/photo/2015/06/25/17/22/nokia-821865__480.jpg',
                'created_at' => now(),
            ],
        ]);
    }
}
