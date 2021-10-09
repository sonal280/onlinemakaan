<?php

namespace App\Repositories;
use Illuminate\Support\Facades\DB;

class PropertyRepository{
    public function fetchPropertyType()
    {
        
        // $data = Pre_property_types::get();
        $table = 'pre_property_types';
        $data = DB::table($table)->get();
        return $data;
    }

    public function fetchListingProperty($id)
    {
        $table = 'pre_property_listingtypes';
        $data = DB::table($table)->where('propertytype', $id)->get();
        return $data;
    }

    public function fetchStates()
    {
        $table = 'admin_states';
        $data = DB::table($table)->get();
        return $data;
    }

    public function fetchListingCity($state_id)
    {
        $table = 'admin_districts';
        $data = DB::table($table)->where('state_id', $state_id)->get();
        return $data;
    }
}
