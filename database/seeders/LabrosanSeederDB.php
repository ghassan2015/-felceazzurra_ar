<?php

namespace Database\Seeders;

use App\Models\Labrosan;
use Illuminate\Database\Seeder;

class LabrosanSeederDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Labrosan::create([
           'title'=>["ar"=>"الترطيب والحماية","en"=>"Moisturizing and protecting"],
            'sub_title'=>["ar"=>"يوما بعد يوم بفضل المكونات الطبيعية","en"=>"everything turns into a game!"],
            'description'=>'test',
        ]);
    }
}
