
<div class="card" id="edit-form-step-5" style="display: none;">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <div class='row row-pad'>
                    <label for="">Amenities:</label>
                </div>
                <div class="row jumbotron">

                    <table cellpadding="10" cellspacing="20" align="center">
                        <tr align="center">
                            <th>Water Storage</th>
                            <th>Visitor Parking</th>
                            <th>Park</th>
                            <th>Feng Shui / Vaastu Compliant</th>
                        </tr>
                        <tr align="center">
                            <td><input type='checkbox' class="form-control amenities" id="WaterStorage" name="amenities" value="Water Storage" @if(in_array('Water Storage', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="VisitorParking" name="amenities" value="Visitor Parking" @if(in_array('Visitor Parking', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="Park" name="amenities" value="Park" @if(in_array('Park', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="FengShui" name="amenities" value="Feng Shui / Vaastu Compliant" @if(in_array('Feng Shui / Vaastu Compliant', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>

                        </tr>
                        <tr align="center">
                            <th>Waste Disposal</th>
                            <th>Private Garden / Terrace</th>
                            <th>Rain Water Harvesting</th>
                            <th>Maintenance Staff</th>
                        </tr>
                        <tr align="center">
                            <td><input type='checkbox' class="form-control amenities" id="WasteDisposal" name="amenities" value="Waste Disposal" @if(in_array('Waste Disposal', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="PrivateGarden" name="amenities" value="Private Garden / Terrace" @if(in_array('Private Garden / Terrace', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="WaterHarvesting" name="amenities" value="Rain Water Harvesting" @if(in_array('Rain Water Harvesting', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="MaintenanceStaff" name="amenities" value="Maintenance Staff" @if(in_array('Maintenance Staff', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>

                    </table>
                </div>
                <hr>
                <div class='row row-pad'>
                    <label>Add more Amenities (Recommended)</label>
                </div>
                <hr>
                <h5>Property Feature :</h5>
                <div class="row jumbotron">
                    <table cellpadding="10" cellspacing="20" align="left">
                        <tr align="center">
                            <th>Security / Fire Alarm</th>
                            <th>Centrally Air Conditioned</th>
                            <th>Piped-gas</th>
                        </tr>
                        <tr align="center">
                            <td><input type='checkbox' class="form-control amenities" id="Security" name="amenities" value="Security / Fire Alarm" @if(in_array('Security / Fire Alarm', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="AirConditioned" name="amenities" value="Centrally Air Conditioned" @if(in_array('Centrally Air Conditioned', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="Pipedgas" name="amenities" value="Piped-gas" @if(in_array('Piped-gas', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>
                        <tr align="center">
                            <th>Internet/wi-fi connectivity</th>
                            <th>Water purifier</th>
                        </tr>
                        <tr align="center">
                            <td><input type='checkbox' class="form-control amenities" id="wifi" name="amenities" value="Internet/wi-fi connectivity" @if(in_array('Internet/wi-fi connectivity', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="Waterpurifie" name="amenities" value="Water purifier" @if(in_array('Water purifier', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>

                    </table>
                </div>

                <h5>Society/Building Feature :</h5>
                <div class="row jumbotron">
                    <table cellpadding="10" cellspacing="20" align="left">
                        <tr align="center">
                            <th>Swimming Pool</th>
                            <th>Fitness Centre / GYM</th>
                            <th>Club house / Community Center</th>
                        </tr>
                        <tr align="center">
                            <td><input type='checkbox' class="form-control amenities" id="SwimmingPool" name="amenities" value="Swimming Pool" @if(in_array('Swimming Pool', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="GYM" name="amenities" value="Fitness Centre / GYM" @if(in_array('Fitness Centre / GYM', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="Clubhouse" name="amenities" value="Club house / Community Center" @if(in_array('Club house / Community Center', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>
                        <tr align="center">
                            <th>Security Personnel</th>
                        </tr>
                        <tr align="center">
                            <td><input type='checkbox' class="form-control amenities" id="SecurityPersonnel" name="amenities" value="Security Personnel" @if(in_array('Security Personnel', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>

                    </table>
                </div>


                <h5>Other Features :</h5>
                <div class="row jumbotron">
                    <table cellpadding="10" cellspacing="20" align="left">
                        <tr>
                            <th>Bank Attached Property</th>
                        </tr>
                        <tr align="center">
                            <td><input type='checkbox' class="form-control amenities" id="BankAttached" name="amenities" value="Bank Attached Property" @if(in_array('Bank Attached Property', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>
                    </table>
                </div>
                <hr>
                <h5>Water Source:</h5>
                <div class="row jumbotron">
                    <table cellpadding="10" cellspacing="20" align="left">
                        <tr align="center">
                            <th>Municipal corporation</th>
                            <th>Borewell/Tank</th>
                        </tr>
                        <tr align="center">
                            <td><input type='checkbox' class="form-control amenities" id="Municipalcorporation" name="amenities" value="Municipal corporation" @if(in_array('Municipal corporation', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="Borewell" name="amenities" value="Borewell/Tank" @if(in_array('Borewell/Tank', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>
                    </table>
                </div>
                <hr>
                <h5>Overlooking:</h5>
                <div class="row jumbotron">
                    <table cellpadding="10" cellspacing="20" align="left">
                        <tr align="center">
                            <th>Park/Garden</th>
                            <th>Main Road</th>
                            <th>Club</th>
                            <th>Pool</th>
                        </tr>
                        <tr align="center">
                            <td><input type='checkbox' class="form-control amenities" id="Garden" name="amenities" value="Park/Garden" @if(in_array('Park/Garden', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="MainRoad" name="amenities" value="Main Road" @if(in_array('Main Road', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="Club" name="amenities" value="Club" @if(in_array('Club', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="Pool" name="amenities" value="Pool" @if(in_array('Pool', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>
                        <tr align="center">
                            <th>Others</th>
                        </tr>
                        <tr align="center">
                            <td><input type='checkbox' class="form-control amenities" id="Others" name="amenities" value="Others" @if(in_array('Others', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>
                    </table>
                </div>
                <hr>
                <h5>Some features about your property :</h5>
                <div class="row jumbotron">
                    <table cellpadding="10" cellspacing="20" align="left">
                        <tr align="center">
                            <th>In a gated society</th>
                            <th>Corner Property</th>
                            <th>Pet Friendly</th>
                            <th>Wheelchair Friendly</th>
                        </tr>
                        <tr align="center">
                            <td><input type='checkbox' class="form-control amenities" id="gatedsociety" name="amenities" value="In a gated society" @if(in_array('In a gated society', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="CornerProperty" name="amenities" value="Corner Property" @if(in_array('Corner Property', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="PetFriendly" name="amenities" value="Pet Friendly" @if(in_array('Pet Friendly', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type='checkbox' class="form-control amenities" id="WheelchairFriendly" name="amenities" value="Wheelchair Friendly" @if(in_array('Wheelchair Friendly', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>
                    </table>
                </div>
                <br><br>
                <div class="row jumbotron">
                    <div class="row">
                        <label>Furnishing :</label>
                        <select name="furnishing" id="furnishing" class="form-control">
                            <option value="Unfurnished">Select</option>
                            <option value="Unfurnished">Unfurnished</option>
                            <option value="Furnished">Furnished</option>
                            <option value="Semifurnished">Semifurnished</option>
                        </select>
                    </div>
                    <hr>


                </div><br><br>

                <div class="furnishing jumbotron" style="display: none;">
                    <label for="">Select :</label>
                    <table cellpadding="10" cellspacing="20" align="center">
                        <tr align="center">
                            <th>Wardrobs</th>
                            <th>Fans</th>
                            <th>Beds</th>

                        </tr>
                        <tr align="center">
                            <td><input type="checkbox" class="form-control" id="Wardrobs" name="furnishing" value="Wardrobs" @if(in_array('Wardrobs', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type="checkbox" class="form-control" id="Fans" name="furnishing" value="Fans" @if(in_array('Fans', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type="checkbox" class="form-control" id="Beds" name="furnishing" value="Beds" @if(in_array('Beds', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>
                        <tr align="center">
                            <th>Lights</th>
                            <th>Moduler Kitchen</th>
                            <th>Fridge</th>
                        </tr>
                        <tr align="center">
                            <td><input type="checkbox" class="form-control" id="Lights" name="furnishing" value="Lights" @if(in_array('Lights', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type="checkbox" class="form-control" id="ModulerKitchen" name="furnishing" value="Moduler Kitchen" @if(in_array('Moduler Kitchen', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type="checkbox" class="form-control" id="Fridge" name="furnishing" value="Fridge" @if(in_array('Fridge', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>
                        <tr align="center">
                            <th>AC</th>
                            <th>Geyser</th>
                            <th>TV</th>
                            <th>Stove</th>
                        </tr>
                        <tr align="center">
                            <td><input type="checkbox" class="form-control" id="AC" name="furnishing" value="AC" @if(in_array('AC', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type="checkbox" class="form-control" id="Geyser" name="furnishing" value="Geyser" @if(in_array('Geyser', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type="checkbox" class="form-control" id="TV" name="furnishing" value="TV" @if(in_array('TV', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type="checkbox" class="form-control" id="Stove" name="furnishing" value="Stove" @if(in_array('Stove', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>

                        <tr align="center">
                            <th>Washing M...</th>
                            <th>Water Puri...</th>
                            <th>Microwave</th>
                            <th>Curtains</th>
                        </tr>
                        <tr align="center">
                            <td><input type="checkbox" class="form-control" id="WashingMachine" name="furnishing" value="Washing Machine" @if(in_array('Washing Machine', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type="checkbox" class="form-control" id="WaterPurifire" name="furnishing" value="Water Purifire" @if(in_array('Water Purifire', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type="checkbox" class="form-control" id="Microwave" name="furnishing" value="Microwave" @if(in_array('Microwave', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type="checkbox" class="form-control" id="Curtains" name="furnishing" value="Curtains" @if(in_array('Curtains', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>
                        <tr align="center">
                            <th>Chimney</th>
                            <th>Exhaust fan</th>
                            <th>Sofa</th>
                            <th>Dinning Table</th>
                        </tr>
                        <tr align="center">
                            <td><input type="checkbox" class="form-control" id="Chimney" name="furnishing" value="Chimney" @if(in_array('Chimney', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type="checkbox" class="form-control" id="Exhaustfan" name="furnishing" value="Exhaust fan" @if(in_array('Exhaust fan', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type="checkbox" class="form-control" id="Sofa" name="furnishing" value="Sofa" @if(in_array('Sofa', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                            <td><input type="checkbox" class="form-control" id="DinningTable" name="furnishing" value="Dinning Table" @if(in_array('Dinning Table', explode(',', $property_data->amenities))) {{ "checked" }} @endif></td>
                        </tr>

                    </table>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-primary previous pull-left" id="previous_four">Previous</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary Next pull-right" id="edit_next_five">Next</button>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>