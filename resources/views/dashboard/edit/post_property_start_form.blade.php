@extends('layouts.master')

@section('title', 'Online Makaan || Post Property')
@section('breadcrumb', 'Select Property Category')
@section('heading', 'Post Property')
@section('content')
        <div class="card-body" id="form-step-1">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Property Type:</label>
                  <select class="form-control select2 edit_property_type" style="width: 100%;">
                  <option selected="selected" value="0">Select Property Type</option>
                  @if (isset($property_data))
                      @foreach($propertyTypes as $propertyType)
                        @if ($propertyType->id == $property_data->propertytype)
                            <option  value = "{{$propertyType->id}}" selected>{{$propertyType->name}}</option>
                        @else
                            <option  value = "{{$propertyType->id}}">{{$propertyType->name}}</option>
                        @endif
                      @endforeach
                  @else
                    @foreach($propertyTypes as $propertyType)
                      <option  value = "{{$propertyType->id}}">{{$propertyType->name}}</option>
                    @endforeach
                  @endif
                  </select>
                  <span id="property_type_span" style="display: none;">This feild is required!</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>List Property For:</label>
                  @if (isset($property_data))
                    <input type = "hidden" value="{{$property_data->listingtype}}" id="edit_listing_property_id"> 
                  @endif
                    <select class="form-control select2 edit_pre_property_listingtypes" style="width: 100%;">
                    </select>
                  
                </div>
              </div>
            </div>

            <button class="btn btn-primary" id="startpostbtn">Start for post property</button>
        </div>

  
        @include('dashboard.edit.property_form.step_two')
        @include('dashboard.edit.property_form.property_type_form.house')
        @include('dashboard.edit.property_form.step_four')
        @include('dashboard.edit.property_form.aminities')
        @include('dashboard.edit.property_form.property_upload')
</div>
   

@endsection



