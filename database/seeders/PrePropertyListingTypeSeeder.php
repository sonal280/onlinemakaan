<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrePropertyListingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'propertytype'  =>  1,
            'name'  =>  'Rent',
            'deleted'   =>  0
        ],[
            'propertytype'  =>  1,
            'name'  =>  'Sell',
            'deleted'   =>  0
        ],[
            'propertytype'  =>  1,
            'name'  =>  'Paying Guest',
            'deleted'   =>  0
        ],[
            'propertytype'  =>  2,
            'name'  =>  'Paying Guest',
            'deleted'   =>  0
        ],[
            'propertytype'  =>  2,
            'name'  =>  'Rent',
            'deleted'   =>  0
        ],[
            'propertytype'  =>  2,
            'name'  =>  'Sell',
            'deleted'   =>  0
        ],[
            'propertytype'  =>  3,
            'name'  =>  'Rent',
            'deleted'   =>  0
        ],[
            'propertytype'  =>  3,
            'name'  =>  'Sell',
            'deleted'   =>  0
        ],[
            'propertytype'  =>  4,
            'name'  =>  'Rent',
            'deleted'   =>  0
        ],[
            'propertytype'  =>  4,
            'name'  =>  'Sell',
            'deleted'   =>  0
        ],[
            'propertytype'  =>  5,
            'name'  =>  'Rent',
            'deleted'   =>  0
        ],[
            'propertytype'  =>  5,
            'name'  =>  'Sell',
            'deleted'   =>  0
        ]];
        DB::table('pre_property_listingtypes')->insert($data);;
    }
}
