<div class="card-body" id="edit-property-type-2" style="display: none;">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Super Built Up Area:</label>
                  <input type="text" class="form-control" name="superBuiltupArea" id="superBuiltupArea">
                  <span id="superBuiltupArea_span" style="display: none;">This feild is required!</span>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Built Up Area:</label>
                  <input type="text" class="form-control" name="builtUpArea" id="builtUpAreaflat">
                  <span id="builtUpAreaflat_span" style="display: none;">This feild is required!</span>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Carpet Area:</label>
                  <input type="text" class="form-control" name="carpetArea" id="carpetArea">
                  <span id="carpetArea_span" style="display: none;">This feild is required!</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                    <label for="bedrooms">Bedrooms</label>
                    <select name="bedrooms" id="bedrooms" class="form-control">
                     <?php
                        for($i=1; $i<=10; $i++){
                          echo '<option value="'.$i.'">'.$i.'</option>';  
                        }
                     ?>
                    </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label for="bathrooms">Bathrooms</label>
                    <select name="bathrooms" id="bathrooms" class="form-control">
                    <?php
                        for($i=1; $i<=10; $i++){
                          echo '<option value="'.$i.'">'.$i.'</option>';  
                        }
                     ?>
                    </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label for="balconies">Balconies</label>
                    <select name="balconies" id="balconies" class="form-control">
                    <?php
                        for($i=1; $i<=10; $i++){
                          echo '<option value="'.$i.'">'.$i.'</option>';  
                        }
                     ?>
                    </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                    <label for="bedrooms">Total Floor</label>
                    <select name="totalFloors" id="totalFloors" class="form-control">
                    <?php
                        for($i=1; $i<=50; $i++){
                          echo '<option value="'.$i.'">'.$i.'</option>';  
                        }
                     ?>
                    </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label for="propertyOnFloor">Property On Floor</label>
                    <select name="propertyOnFloor" id="propertyOnFloor" class="form-control">
                    <?php
                        for($i=1; $i<=50; $i++){
                          echo '<option value="'.$i.'">'.$i.'</option>';  
                        }
                     ?>
                    </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label for="parking">Parking</label>
                    <select name="parking" id="parking" class="form-control">
                    <?php
                        for($i=1; $i<=10; $i++){
                          echo '<option value="'.$i.'">'.$i.'</option>';  
                        }
                     ?>
                    </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="availability">Availability</label>
                    <select name="availability" id="availability" class="form-control">
                        <option value="1">Ready to move</option>
                        <option value="1">Under Construction</option>
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
                <button class="btn btn-primary previous pull-left" id="edit_previous_flat">Previous</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-primary Next pull-right" id="edit_next_flat">Next</button>
              </div>
            </div>
        </div>