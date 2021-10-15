
<section class="content" id="form-step-6" style="display:none">
    <div class="row">
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
                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-primary pull-right" >Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

