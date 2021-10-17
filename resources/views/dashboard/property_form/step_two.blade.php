<div class="card-body" id="form-step-2" style="display: none;">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>State:</label>
                  <select class="form-control select2" id="states" style="width: 100%;">
                  <option selected="selected" value="0">Select State</option>
                  @foreach($states as $state)
                    <option  value = "{{$state->id}}">{{$state->state}}</option>
                  @endforeach
                  </select>
                  <span id="states_span" style="display: none;">This feild is required!</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>City:</label>
                  <select class="form-control select2 cities" id="cities" style="width: 100%;">
                  </select>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Locality:</label>
                  <input type="text" class="form-control" name="locality" id="locality">
                  <span id="locality_span" style="display: none;">This feild is required!</span>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Street/House No.:</label>
                  <input type="text" class="form-control" name="street" id="street">
                  <span id="street_span" style="display: none;">This feild is required!</span>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Project/Colony name:</label>
                  <input type="text" class="form-control" name="colonyname" id="colonyname">
                  <span id="colonyname_span" style="display: none;">This feild is required!</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <input type="checkbox" name="hideaddress" id="hideaddress"> <span> Hide Street, House No. address</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <button class="btn btn-primary previous pull-left" id="previous_first">Previous</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-primary Next pull-right" id="next_two">Next</button>
              </div>
            </div>
        </div>