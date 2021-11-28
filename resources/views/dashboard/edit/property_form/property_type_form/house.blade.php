<div class="card-body" id="edit-property-type-1" style="display: none;">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Plot Area:</label>
                  <input type="text" class="form-control" name="plotArea" id="plotArea" value="{{$property_data->plot_area}}">
                  <span id="plotArea_span" style="display: none;">This feild is required!</span>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Built Up Area:</label>
                  <input type="text" class="form-control" name="builtUpArea" id="builtUpArea" value="{{$property_data->builtup_area}}">
                  <span id="builtUpArea_span" style="display: none;">This feild is required!</span>
                </div>
              </div>

              <!-- <div class="col-md-4">
                <div class="form-group">
                  <label>Carpet Area:</label>
                  <input type="text" class="form-control" name="carpetArea" id="carpetArea">
                </div>
              </div> -->
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                    <label for="bedrooms">Bedrooms</label>
                    <select name="bedrooms" id="bedrooms" class="form-control">
                    @if ($property_data)
                      <?php
                          for($i=1; $i<=10; $i++){
                            if ($property_data->bedroom == $i){
                              echo '<option value="'.$i.'" selected>'.$i.'</option>';  
                            }else{
                              echo '<option value="'.$i.'">'.$i.'</option>'; 
                            }
                          }
                      ?>    
                    @else
                    <?php
                        for($i=1; $i<=10; $i++){
                          echo '<option value="'.$i.'">'.$i.'</option>';  
                        }
                     ?>
                    @endif
                    </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label for="bathrooms">Bathrooms</label>
                    <select name="bathrooms" id="bathrooms" class="form-control">
                    @if ($property_data)
                      <?php
                          for($i=1; $i<=10; $i++){
                            if ($property_data->bathroom == $i){
                              echo '<option value="'.$i.'" selected>'.$i.'</option>';  
                            }else{
                              echo '<option value="'.$i.'">'.$i.'</option>'; 
                            }
                          }
                      ?>    
                    @else
                    <?php
                        for($i=1; $i<=10; $i++){
                          echo '<option value="'.$i.'">'.$i.'</option>';  
                        }
                     ?>
                     @endif
                    </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label for="balconies">Balconies</label>
                    <select name="balconies" id="balconies" class="form-control">
                    @if ($property_data)
                      <?php
                          for($i=1; $i<=10; $i++){
                            if ($property_data->balconies == $i){
                              echo '<option value="'.$i.'" selected>'.$i.'</option>';  
                            }else{
                              echo '<option value="'.$i.'">'.$i.'</option>'; 
                            }
                          }
                      ?>    
                    @else
                    <?php
                        for($i=1; $i<=10; $i++){
                          echo '<option value="'.$i.'">'.$i.'</option>';  
                        }
                     ?>
                     @endif
                    </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="bedrooms">Total Floor</label>
                    <select name="totalFloors" id="totalFloors" class="form-control">
                    @if ($property_data)
                      <?php
                          for($i=1; $i<=10; $i++){
                            if ($property_data->furnishing == $i){
                              echo '<option value="'.$i.'" selected>'.$i.'</option>';  
                            }else{
                              echo '<option value="'.$i.'">'.$i.'</option>'; 
                            }
                          }
                      ?>    
                    @else
                    <?php
                        for($i=1; $i<=50; $i++){
                          echo '<option value="'.$i.'">'.$i.'</option>';  
                        }
                     ?>
                     @endif
                    </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label for="parking">Parking</label>
                    <select name="parking" id="parking" class="form-control">
                    @if ($property_data)
                      <?php
                          for($i=1; $i<=10; $i++){
                            if ($property_data->parking == $i){
                              echo '<option value="'.$i.'" selected>'.$i.'</option>';  
                            }else{
                              echo '<option value="'.$i.'">'.$i.'</option>'; 
                            }
                          }
                      ?>    
                    @else
                    <?php
                        for($i=1; $i<=10; $i++){
                          echo '<option value="'.$i.'">'.$i.'</option>';  
                        }
                     ?>
                    @endif
                    </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="availability">Availability</label>
                    <select name="availability" id="availability" class="form-control">
                      @if ($property_data)
                          <option value="1" @if ($property_data->availability == 1) {{'selected'}} @endif>Ready to move</option>
                          <option value="2" @if ($property_data->availability == 2) {{'selected'}} @endif>Under Construction</option>
                      @else
                        <option value="1">Ready to move</option>
                        <option value="2">Under Construction</option>
                      @endif
                    </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label for="flooring">Flooring</label>
                    <select name="flooring" id="flooring" class="form-control">
                        <option value="1">Vitrified</option>
                    </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <button class="btn btn-primary previous pull-left" id="previous_house">Previous</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-primary Next pull-right" id="edit_next_house">Next</button>
              </div>
            </div>
        </div>