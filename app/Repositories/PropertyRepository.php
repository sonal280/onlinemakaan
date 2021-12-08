<?php

namespace App\Repositories;
use Illuminate\Support\Facades\DB;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Http\Controllers\MailController;

class PropertyRepository implements PropertyRepositoryInterface{
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

    public function storeData($request)
    {
        $property_data = new Property();
        $property_data->guest_user = auth()->id();
        $property_data->prostatus = ($request->prostatus)?$request->prostatus:1;
        // form_step_one_data
        $form_step_one = json_decode($request->form_step_one);
        $property_data->propertytype = $form_step_one->property_type;
        $property_data->listingtype = $form_step_one->pre_property_listingtypes;
        // form_step_two_data
        $form_step_two = json_decode($request->form_step_two);
        $property_data->state = $form_step_two->states;
        $property_data->city = $form_step_two->cities;
        $property_data->locality = $form_step_two->locality;
        $property_data->street = $form_step_two->street;
        $property_data->pro_col_name = $form_step_two->colonyname;
        $property_data->hide = $form_step_two->hideaddress;
        // form_step_three_data
        $form_step_three = json_decode($request->form_step_three);
        $property_data->plot_area = isset($form_step_three->plotArea)?$form_step_three->plotArea:'';
        $property_data->superbuiltup_area = isset($form_step_three->superBuiltupArea)?$form_step_three->superBuiltupArea:'';
        $property_data->builtup_area = isset($form_step_three->builtUpArea)?$form_step_three->builtUpArea:'';
        $property_data->carpet_area = isset($form_step_three->carpetArea)?$form_step_three->carpetArea:'';
        $property_data->bedroom	  = isset($form_step_three->bedrooms)?$form_step_three->bedrooms:'';
        $property_data->bathroom  = isset($form_step_three->bathrooms)?$form_step_three->bathrooms:'';
        $property_data->balconies  = isset($form_step_three->balconies)?$form_step_three->balconies:'';
        $property_data->total_floor	  = isset($form_step_three->totalFloors)?$form_step_three->totalFloors:'';
        $property_data->parking  = isset($form_step_three->parking)?$form_step_three->parking:'';
        $property_data->availability  = isset($form_step_three->availability)?$form_step_three->availability:'';
        $property_data->flooring  = isset($form_step_three->flooring)?$form_step_three->flooring:'';
        $property_data->property_on_floor = isset($form_step_three->propertyOnFloor)?$form_step_three->propertyOnFloor:'';
        $property_data->floor_allowed_for_construction	 = isset($form_step_three->floorallowed)?$form_step_three->floorallowed:'';
        $property_data->possession_by = isset($form_step_three->possession)?$form_step_three->possession:date('yy-m-d');
        $property_data->is_boundary_wall_made = isset($form_step_three->boundary)?$form_step_three->boundary:'';
        $property_data->facing = isset($form_step_three->facing)?$form_step_three->facing:'';
        $property_data->is_verified = isset($form_step_three->is_verified)?$form_step_three->is_verified:'';
        $property_data->date  = isset($form_step_three->date)?$form_step_three->date:date('yy-m-d');
        // form_step_four_data
        $form_step_four = json_decode($request->form_step_four);
        $property_data->price = $form_step_four->price;
        $property_data->description = $form_step_four->description;
        // amenities
        $amenities = json_decode($request->amenities);
        $property_data->amenities = implode(',', $amenities);
        // furnishing data
        $property_data->furnishing = isset($form_step_three->furnishing)?$form_step_three->furnishing:'';
        $furnishing = json_decode($request->furnishing);
        $property_data->items = implode(',', $furnishing);
        
        
        $property_post = $property_data->save();
        $last_inserted_id = $property_data->id;

        $filename = $request->file_name;
        foreach($filename as $file){
            $property_image = new PropertyImage();
            $property_image->pro_id = $last_inserted_id;
            $property_image->image = $file;
            $property_image->save();
        }

        
    }

    public function getAllProperty($userid)
    {
        $property = Property::where('guest_user', $userid)->get();
        
        return $property;
    }
    
}
