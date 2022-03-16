<form method="post" action="/">
    <div class="row mt-4">
        @csrf
        <div class="col-2">
            <label for="city_id">Select City:</label>
            <select name="city_id" class="form-control">
                <option value="">Select City</option>
                @foreach($cities as $c)
                    <option value="{{$c->id}}">{{$c->city_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-2">
            <label for="from">From:</label>
            <div class="input-group">
                <input type="date" class="form-control" value="12.03.2022" name="from" id="from">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="col-2">
            <label for="to">To:</label>
            <div class="input-group">
                <input type="date" class="form-control" name="to" id="to">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="col-2">
            <label for="temperature">Temperature:</label>
            <input type="number" class="form-control" name="temperature" id="temperature">
        </div>
        <div class="col-2">
            <label for="feel">Feel:</label>
            <input type="number" class="form-control" name="feel" id="feel">
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-secondary mt-4">Filter</button>
        </div>
    </div>
</form>
<table class="table table-striped mt-4">
    <thead>
    <tr>
        <th>ID</th>
        <th>City</th>
        <th>coordinates</th>
        <th>weather</th>
        <th>temperature</th>
        <th>feel</th>
        <th>humidity</th>
        <th>wind</th>
        <th>DateTime</th>
        @auth
            <th>Action</th>
        @endauth
    </tr>
    </thead>
    <tbody>
    @foreach($weather as $w)
        <tr>
            <td>{{$w->id}}</td>
            <td>{{$w->city->city_name}}</td>
            <td>{{$w->coordinates}}</td>
            <td>{{$w->weather}}</td>
            <td>{{$w->temperature}}</td>
            <td>{{$w->feel}}</td>
            <td>{{$w->humidity}}</td>
            <td>{{$w->wind}}</td>
            <td>{{$w->updated_at}}</td>
            @auth
                <td>
                    <a href="#" class="btn btn-link"
                       onclick="editBtn({{$w->id}})">Edit</a>
                </td>
            @endauth
        </tr>
    @endforeach
    </tbody>
</table>
<div class="d-flex">
    {!! $weather->links() !!}
</div>
@include('edit')
