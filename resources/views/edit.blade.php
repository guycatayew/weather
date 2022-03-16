<div class="modal fade" id="myModaledit" role="dialog">
    <div class="modal-dialog modal-lg">
        <form id="weatherform">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Weather Update</h4>
                </div>
                <div class="modal-body" id="div_modal_body">
                    @csrf
                    <input type="hidden" name="id" value="">
                    <div class="row">
                        <div class="col-md-12">
                            <label>City Name</label>
                            <input value="city_id" name="city_id" class="form-control" readonly>

                            <label>Coordinates</label>
                            <input value="coordinates" name="coordinates" class="form-control" readonly>

                            <label>Weather</label>
                            <input value="weather" name="weather" class="form-control" readonly>

                            <label>Temperature</label>
                            <input value="temperature" name="temperature" class="form-control">

                            <label>Feel</label>
                            <input value="feel" name="feel" class="form-control">

                            <label>Humidity</label>
                            <input value="humidity" name="humidity" class="form-control">

                            <label>Wind</label>
                            <input value="wind" name="wind" class="form-control" readonly>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-success mr-1 mb-1"
                            onclick="updateWeather()">Update
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
