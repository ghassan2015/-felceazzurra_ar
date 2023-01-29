<?php

namespace Database\Seeders;

use App\Models\Constant;
use Illuminate\Database\Seeder;

class ConstantsSeederDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array=[
          [
              'parent_id'=>null,
              's_key'=>'status_cd',
              'name'=>["ar"=>"حالة ","en"=>"status"]

          ],
            [
                'parent_id'=>1,
                's_key'=>'status_cd',
                'name'=>["ar"=>" فعال ","en"=>" active"]

            ],


            [
                'parent_id'=>1,
                's_key'=>'status_cd',
                'name'=>["ar"=>"غير فعال ","en"=>"non active"]

            ],



            [
                'parent_id'=>null,
                's_key'=>'story_cd',
                'name'=>["ar"=>"الاسم ","en"=>"name"]

            ],



            [
                'parent_id'=>4,
                's_key'=>'story_cd',
                'name'=>["ar"=>"قصة ايطالية","en"=>"an Italian story"]

            ],

            [
                'parent_id'=>4,
                's_key'=>'story_cd',
                'name'=>["ar"=>"ذكريات","en"=>"memories"]

            ],

            [
                'parent_id'=>4,
                's_key'=>'story_cd',
                'name'=>["ar"=>"لفتة من الرعاية","en"=>"gesture of care"]

            ],


            [
                'parent_id'=>4,
                's_key'=>'story_cd',
                'name'=>["ar"=>"الجودة والابتكار","en"=>"quality and innovat"]

            ],




        ];


        foreach ($array as$value){
            Constant::create([
                'parent_id'=>$value['parent_id'],
                's_key'=>$value['s_key'],
                'name'=>$value['name'],
            ]);
        }
    }
}
