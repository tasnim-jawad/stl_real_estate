<?php
namespace App\Modules\Management\GalleryManagement\GalleryCategory\Seeder;

use Illuminate\Database\Seeder as SeederClass;
use Faker\Factory as Faker;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="App\Modules\Management\GalleryManagement\GalleryCategory\Seeder\Seeder"
     */
    static $model = \App\Modules\Management\GalleryManagement\GalleryCategory\Models\Model::class;

    public function run(): void
    {
        $faker = Faker::create();
        self::$model::truncate();

        for ($i = 1; $i <= 100; $i++) {
            self::$model::create([                'name' => $faker->text(50),
                'type' => $faker->randomElement(array (
  0 => 'image',
  1 => 'video',
)),
            ]);
        }
    }
}