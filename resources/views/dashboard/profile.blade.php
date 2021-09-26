@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profileView" data-toggle="tab">View</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> -->
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">      
                    <!-- @foreach($user as $user_detail)  @endforeach -->               
                  <div class="active tab-pane" id="profileView">
                    <form class="form-horizontal" name="updaetProfile" id="updaetProfile" method="POST" action="/profile_update/{{ $user_detail->id }}" enctype="multipart/form-data">
                    @csrf
                    @foreach($user as $user_detail)
                    <div class="form-group row">
                        <div><img src="{{ $user_detail->image }}" id="" alt=""></div>
                      </div>
                    <div class="form-group row">
                        <label for="uploadImage" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-10">
                            <img src="" heigt="50px" width="50px" alt="">
                            <input type="file" class="form-control" name="uploadImage" id="uploadImage" placeholder="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="name" class="form-control" name="inputName" id="inputName" placeholder="Name" value="{{$user_detail->name}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" value="{{$user_detail->email}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputMobile" class="col-sm-2 col-form-label">Mobile</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="inputMobile" id="inputMobile" placeholder="Mobile" value="{{$user_detail->mobile}}">
                        </div>
                      </div>
                     
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <input type="submit" value="submit">
                        </div>
                      </div>
                    </form>
                    @endforeach
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  



@endsection