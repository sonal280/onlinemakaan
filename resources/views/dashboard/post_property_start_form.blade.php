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
                  <select class="form-control select2 property_type" style="width: 100%;">
                  <option selected="selected" value="0">Select Property Type</option>
                  @foreach($propertyTypes as $propertyType)
                    <option  value = "{{$propertyType->id}}">{{$propertyType->name}}</option>
                  @endforeach
                  </select>
                  <span id="property_type_span" style="display: none;">This feild is required!</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>List Property For:</label>
                  <select class="form-control select2 pre_property_listingtypes" style="width: 100%;">
                  </select>
                </div>
              </div>
            </div>

            <button class="btn btn-primary" id="startpostbtn">Start for post property</button>
        </div>


        @include('dashboard.property_form.step_two')
        <!-- @include('dashboard.property_form.step_three') -->
        @include('dashboard.property_form.property_type_form.house')
        @include('dashboard.property_form.property_type_form.plot')
        @include('dashboard.property_form.property_type_form.flat')
        @include('dashboard.property_form.step_four')
        @include('dashboard.property_form.aminities')
        @include('dashboard.property_form.property_upload')
</div>
   

@endsection



