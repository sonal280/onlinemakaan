<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyImage;
use App\Repositories\PropertyRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Repositories\MailRepository;
use App\Repositories\PropertyRepositoryInterface;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $propertyRepository, $mailRepository;
    public function __construct(PropertyRepositoryInterface $propertyRepository, MailRepository $mailRepository)
    {
        $this->propertyRepository = $propertyRepository;
        $this->mailRepository = $mailRepository;
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
        // dd($request);
        $this->propertyRepository->storeData($request);
        $this->mailRepository->sendEmail();
        // return true;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        $all_property = $this->propertyRepository->getAllProperty();
        return view('dashboard.all_property', [
            'all_property' => $all_property
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property, $pro_id)
    {
        $property_data = Property::where('pro_id', $pro_id)->firstOrFail();
        $propertyType = $this->propertyRepository->fetchPropertyType();
        $states = $this->propertyRepository->fetchStates();
        $property_images = PropertyImage::where('pro_id', $pro_id)->get();
        return view('dashboard.edit.post_property_start_form', [
            'property_data' => $property_data,
            'propertyTypes'  =>  $propertyType,
            'states'  =>  $states,
            'property_images' => $property_images,
        ]);
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

    public function fetchPropertyType()
    {

        $propertyType = $this->propertyRepository->fetchPropertyType();
       return $propertyType;
    }

    public function fetchListingProperty($id)
    {

        $listingProperty = $this->propertyRepository->fetchListingProperty($id);
       return $listingProperty;
    }

    public function fetchStates()
    {
        $fetchStates = $this->propertyRepository->fetchStates();
        return $fetchStates;
    }

    public function fetchListingCity($state_id)
    {

        $city = $this->propertyRepository->fetchListingCity($state_id);
        return $city;
    }

   
    public function multipleImages(Request $request)
    {
        $file = $request->file('file')->getClientOriginalName();
        $extension = $request->file('file')->guessExtension();
        $newImageName =  time().date('dd-mm-yy').'.'.$file;
        $filepath = $request->file('file')->storeAs('images/property/', $newImageName, 'public');
        die('{"jsonrpc" : "2.0", "result" : null, "id" : "id", "newfilename" : "'."$newImageName".'"}');
    }

    public function propertyImageDelete($image_id)
    {
       
        //dd($pro_id);
        $PropertyImage = PropertyImage::find($image_id);
        $result = $PropertyImage->delete();
        if($result){
            $msg = $image_id;
        }else {
            $msg = 'Oops something went wrong';
        }
        return $msg;
    }

}
