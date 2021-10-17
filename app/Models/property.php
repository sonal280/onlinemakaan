<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prostatus',
        'listingtype ',
        'propertytype',
        'price',
        'state',
        'city',
        'locality',
        'street',
        'pro_col_name',
        'hide',
        'plot_area',
        'superbuiltup_area',
        'builtup_area',
        'carpet_area',
        'bedroom',
        'bathroom',
        'balconies',
        'furnishing',
        'items',
        'total_floor',
        'parking',
        'availability',
        'flooring',
        'description',
        'property_on_floor',
        'floor_allowed_for_construction',
        'possession_by',
        'is_boundary_wall_made',
        'facing',
        'amenities',
    ];
}
