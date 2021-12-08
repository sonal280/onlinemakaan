@extends('layouts.master')

@section('title', 'Online Makaan || Post Property')
@section('breadcrumb', 'All Property')
@section('heading', 'All Property')
@section('content')


 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Your Properties: </h3>
            </div>
        <?php 
        echo "<pre>";
        print_r($all_property);?>

          
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <section class="content">
      <div class="container-fluid">
        @foreach($all_property as $property)
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  
                  <?=$property->bedroom?>, Flat For Rent in Internet Explorer, BADGAN 
                  <i class="fas fa-edit"></i>
                </h3>
              </div>
              <div class="card-body">
                
                <div class="text-muted mt-3">
                  Instructions for how to use modals are available on the
                  <a href="http://getbootstrap.com/javascript/#modals">Bootstrap documentation</a>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
        @endforeach
            
    </section>

</div>
   

@endsection