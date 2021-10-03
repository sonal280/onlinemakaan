<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PrePropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'name'  =>  'House',
            'pagename'  =>  'reg_houseform.php',
            'deleted'   =>  0,
        ],[
            'name'  =>  'Flat',
            'pagename'  =>  'reg_flatform.php',
            'deleted'   =>  0,
        ],[
            'name'  =>  'Plot',
            'pagename'  =>  'reg_landform.php',
            'deleted'   =>  0,
        ],[
            'name'  =>  'Commercial Space',
            'pagename'  =>  'reg_commercialform.php',
            'deleted'   =>  0,
        ],[
            'name'  =>  'Agriculture Land',
            'pagename'  =>  'reg_agricultureform.php',
            'deleted'   =>  0,
        ]];
        DB::table('pre_property_types')->insert($data);
    }
}
