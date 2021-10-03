@extends('layouts.master')

@section('title', 'Online Makaan || Post Property')
@section('breadcrumb', 'Select Property Category')
@section('heading', 'Post Property')
@section('content')

        <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Minimal</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
              </div>
            </div>
        </div>
</div>
   

@endsection



