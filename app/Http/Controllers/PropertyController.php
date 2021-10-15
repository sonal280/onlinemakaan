<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Repositories\PropertyRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $propertyRepository;
    public function __construct(PropertyRepository $propertyRepository)
    {
        $this->propertyRepository = $propertyRepository;
    }

    public function index()
    {
        $propertyType = $this->propertyRepository->fetchPropertyType();
        $states = $this->propertyRepository->fetchStates();
        // $listingProperty = $this->propertyRepository->fetchListingProperty();
        return view('dashboard.post_property_start_form', [
            'propertyTypes'  =>  $propertyType,
            'states'  =>  $states
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file')->getClientOriginalName();
        dd($file);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(property $property)
    {
        //
    }

    public function fetchListingProperty($id)
    {

        $listingProperty = $this->propertyRepository->fetchListingProperty($id);
       return $listingProperty;
    }

    public function fetchListingCity($state_id)
    {

        $city = $this->propertyRepository->fetchListingCity($state_id);
       return $city;
    }

    public function fetchPropertyType()
    {

        $propertyType = $this->propertyRepository->fetchPropertyType();
       return $propertyType;
    }

    public function multipleImages(Request $request)
    {
        $file = $request->file('file')->getClientOriginalName();
        $extension = $request->file('file')->guessExtension();
        $newImageName =  date('dd-mm-yy').'.'.$file;
        $filepath = $request->file('file')->storeAs('images/property/', $newImageName, 'public');
    }

}
