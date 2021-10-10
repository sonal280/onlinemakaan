<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <form action='' method='post'>
                    <div class='row row-pad'>
                        <div class="col-md-2">
                            <label for="">Plot Area SQ.FT.</label>
                        </div>
                        <div class="col-md-2">
                            <input type='text' class="form-control" id="plotarea" name="plotarea" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">Floor allowed for construction :</label>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control" id="floorallowed" name="floorallowed" required>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>More then 5</option>
                            </select>
                        </div>
                    </div><br><br>
                    <div class='row row-pad'>
                        <div class="col-md-2">
                            <label for="">Possession by:</label>
                        </div>
                        <div class="col-md-4">
                            <input type='date' class="form-control" id="possession" name="possession" required>
                        </div>
                    </div><br><br>
                    <div class='row'>
                        <div class="col-md-2">
                            <label for="">Is boundary wall made :</label>
                        </div>
                        <div class="col-md-6">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="boundary" value="Yes" checked="" class="custom-control-input"><span class="custom-control-label">Yes</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="boundary" value="No" checked="" class="custom-control-input"><span class="custom-control-label">No</span>
                            </label>
                        </div>
                    </div><br><br>
                    <div class="row row-pad">
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-2">
                            <input type='submit' name="submission" value="NEXT" class="form-control btn btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>