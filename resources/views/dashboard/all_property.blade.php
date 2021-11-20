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
        

          <div class="card">
          
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Property</th>
                  <th>Property Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($all_property as $property)
                  <tr>
                    <td>{{$property->pro_id}}</td>
                    <td><img src="https://www.w3schools.com/images/lamp.jpg" alt="Lamp" width="32" height="32"></td>
                    <td><a href="/edit-property/{{$property->pro_id}}">EDIT</a> | <a href="https://www.w3schools.com">DELETE</a></td>
                </tr>
               @endforeach  
                </tbody>
                <tfoot>
                <tr>
                  <th>Property</th>
                  <th>Property Image</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


</div>
   

@endsection