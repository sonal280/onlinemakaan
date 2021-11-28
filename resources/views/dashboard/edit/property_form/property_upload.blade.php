<section class="content" id="edit-form-step-6" style="display:none">
    <div class="row" id="uploaded_images" style="height: 150px">
    @foreach ($property_images as $property_image)
        <div class="col-md-2" id="pro_image_{{$property_image->id}}">
        
            <a href="javascript:void(0)" onclick="remove(this, '<?php echo $property_image->id; ?>')" ><img src="{{ asset('storage/images/webicon/close.png')}}" data-token="{{ csrf_token() }}" 
            alt="" style="height:20px; width:20px;position: relative;left: 148px;z-index: 1;top:-4px;border-radius:18px;"></a>
            <img src="{{ asset('storage/images/property/'.$property_image->image) }}" heigt="150px" width="150px"  style="position:absolute" alt="">

        </div>

    @endforeach
    </div>
    <button class="btn btn-info" id="add_more_images">Add More Images</button>
    <div class="row" id="photouploader" style="display:none">
        <div class="col-md-12">
            <div class="box box-primary ">
                <div class="box-header with-border">
                    <h3 class="box-title">Upload Property Image</h3>
                </div>
                <div class="box-body pad">
                    <form role="form" method="post" name="form" id="propertyForm" enctype="multipart/form-data">
                    @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div id="uploader"></div>
                                    <div id="PhotoUploaded"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="box-footer col-md-6">
                                <button type="submit" name="submit" class="btn btn-primary pull-right upload_property" >Upload</button>
                            </div>
                           <div class="col-md-6"> 
                               <input type="button" class="btn btn-primary previous pull-left" id="previous_last_step" value="Previous">
                            </div>
                        </div>
                    </form>
                    <div id="divMsg" style="display:none">
                        <img src="{{ asset('storage/images/loader.gif') }}" alt="Please wait.." />
                    </div>
                     <!-- <div class="col-md-6"> -->
                                <!-- <button class="btn btn-primary previous pull-left" id="previous_last_step">Previous</button> -->
                            <!-- </div> -->
                </div>
            </div>
        </div>
    </div>

</section>

