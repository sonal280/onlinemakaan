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
                  @foreach($propertyTypes as $propertyType)
                    <option selected="selected" value = "{{$propertyType->id}}">{{$propertyType->name}}</option>
                  @endforeach
                  </select>
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
        </div>


        <div class="card-body" id="form-step-2">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Property Type:</label>
                  <select class="form-control select2 property_type" style="width: 100%;">
                  @foreach($propertyTypes as $propertyType)
                    <option selected="selected" value = "{{$propertyType->id}}">{{$propertyType->name}}</option>
                  @endforeach
                  </select>
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
        </div>
</div>
   

@endsection



