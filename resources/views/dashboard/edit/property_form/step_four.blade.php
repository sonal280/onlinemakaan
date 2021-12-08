<div class="card-body" id="edit-form-step-4" style="display: none;">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                  <label>Price:</label>
                  <input type="text" class="form-control" name="price" id="edit-price" value="{{$property_data->price}}">
                  <span id="price_span" style="display: none;">This feild is required!</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <label>Description:</label>
                <textarea class="form-control" name="" id="edit-description" cols="30" rows="10">{{$property_data->description}}</textarea>
                <span id="description_span" style="display: none;">This feild is required!</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <button class="btn btn-primary previous pull-left" id="edit_previous_three">Previous</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-primary Next pull-right" id="edit_next_four">Next</button>
              </div>
            </div>
        </div>